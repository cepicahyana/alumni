<?php
class Model extends CI_Model
{

   
	public function __construct() {
        parent::__construct();
    }
	function newForm(){
		$this->db->limit(1);
		$this->db->order_by("_ctime","desc");
		$db=$this->db->get("data_acara")->row();
		return isset($db->kode)?($db->kode):"";
	}
	function idu(){
		return $this->session->userdata("id");
	}
	function insert(){
		$durasi	= $this->input->post("f[durasi]");
		$tgl	= $this->input->post("tgl");
		$tgl	= $this->tanggal->eng_($tgl,"-");
		$kode	=	date("YmdHis").$this->m_reff->acak(2);
		
		$this->m_reff->direktori(date('Y'),$kode); 
		$f		= $this->input->post("f"); 
		$this->db->set($f);
		$this->db->set("kode",$kode);
		//$this->db->set("durasi",$durasi);
		$this->db->set("tgl",$tgl);
		$this->db->set("_cid",$this->idu());
			$this->db->insert("data_acara"); 
		
		$dt=array(
		"kode"=>$kode,
		"urut"=>1
		);
		return	$this->db->insert("kalkulasi_waktu",$dt);
		
	}
	
	/*===================================*/
	public function getData()
	{
		$this->_getData();
		if($this->input->post("length") != -1) 
		$this->db->limit($this->input->post("length"),$this->input->post("start"));
	 	return $this->db->get()->result();
	}
	private function _getData() 
	{	
		 //$this->db->where("level","3"); 
		 if(isset($_POST['search']['value'])){
			$searchkey=$_POST['search']['value'];
				  
				$query=array(
				"judul_acara"=>$searchkey
				);
				$this->db->group_start()
                        ->or_like($query)
                ->group_end();
				  
			}
		$this->db->order_by("id","desc"); 
		$query=$this->db->from("data_acara");
		return $query;
	
	}	
	public function count()
	{		
		$this->_getData();
		return $this->db->get()->num_rows();
	}
	
	 
    function upload_file_peserta(){
			$kode	=	$this->input->post("kode"); 
			$tahun	=	$this->input->post("tahun");  
			$var["validasi"]=true;  
			 if(isset($_FILES["userfile"]['tmp_name']))
			{  
			$dok=$this->m_reff->pengaturan(1)."/".$tahun."/".$kode;
			$namfil=$tahun."/".$kode;
				 
				$before_file=$this->m_reff->goField("data_acara","file_peserta","where kode='".$kode."' ");
				$file=$this->m_reff->upload_file("userfile",$dok,"file-peserta-".date("d_m_Y"),"JPG,JPEG,PNG,png,jpg,jpeg,ppt,pptx,pdf,docx,xlsx,xls,zip,MP4",$sizeFile="250000000",$before_file);
				if($file["validasi"]!=false)
				{ 
					
					$this->db->where("kode",$kode); 
					$this->db->set("file_peserta",$namfil."/".$file["name"]);
					$this->db->update("data_acara");
				}else{
				
				}
			$var=$file;
			} 
			$var["csrf"]=$this->security->get_csrf_hash(); 
			return $var;
	}

	function setKalkulasi(){
		$tgl		=	date("Y-m-d");
		$kode		=	$this->input->post("kode"); 
		$agenda		=	$this->input->post("agenda"); 
		$jam_mulai	=	$this->input->post("jam_mulai"); 
		$durasi		=	$this->input->post("durasi"); 
		$no			=	$this->input->post("no"); 
		$cek		=	$this->db->get_where("kalkulasi_waktu",array("kode"=>$kode))->num_rows();
		$jam_akhir	=	$this->tanggal->tambahMenit($tgl." ".$jam_mulai,$durasi);
		if(!$cek){
				$array=array(
				"kode"		=>	$kode,
				"agenda"	=>	$agenda,
				"jam_mulai"	=>	$jam_mulai,
				"jam_akhir"	=>	$jam_akhir,
				"durasi"	=>	$durasi,
				"urut"		=>	$no,
				);
				$this->db->insert("kalkulasi_waktu",$array);
		return	$this->susun_agenda();
		}else{
				$array=array(
				"kode"		=>	$kode,
				"agenda"	=>	$agenda,
				"jam_mulai"	=>	$jam_mulai,
				"jam_akhir"	=>	$jam_akhir,
				"durasi"	=>	$durasi,
				"urut"		=>	$no,
				);
				$this->db->where("kode",$kode);
				$this->db->where("urut",$no);
				$this->db->update("kalkulasi_waktu",$array);
		return	$this->susun_agenda();
		}
		 
	}
	
	function addKalkulasi(){
		$tgl		=	date("Y-m-d");
		$kode		=	$this->input->post("kode");  
		$no			=	$this->input->post("no"); 
		$waktu		=	$this->db->get_where("kalkulasi_waktu",array("kode"=>$kode,"urut"=>($no-1)))->row();
		$jam_mulai	=	isset($waktu->jam_akhir)?($waktu->jam_akhir):"";
		$jam_akhir	=	$this->tanggal->tambahMenit($tgl." ".$jam_mulai,30);
		$array=array(
				"kode"			=>	$kode, 
				"urut"			=>	$no,
				"durasi"		=>	30,
				"jam_mulai"		=>	SUBSTR($jam_mulai,0,10),
				"jam_akhir"		=>	SUBSTR($jam_akhir,10,10)
				); 
				$this->db->where("kode",$kode);
				$this->db->where("urut",$no);
		return	$this->db->insert("kalkulasi_waktu",$array);
	}
	
	function setAganda(){ 
		$kode		=	$this->input->post("kode");  
		$no			=	$this->input->post("no"); 
		$agenda		=	$this->input->post("val"); 
		   
				$this->db->set("agenda",$agenda);
				$this->db->where("kode",$kode);
				$this->db->where("urut",$no);
		return	$this->db->update("kalkulasi_waktu");
	}
	
	function susun_agenda(){
				$tgl	=	date("Y-m-d");
				$kode	=	$this->input->post("kode");
				$this->db->order_by("urut","ASC");
				$this->db->order_by("id","DESC");
				$this->db->where("kode",$kode);
		$db	=	$this->db->get_where("kalkulasi_waktu")->result();
		$no = 1;
		foreach($db as $val){
		
			$jam_mulai	=	$val->jam_mulai;
			$jam_akhir	=	$val->jam_akhir;
			$durasi		=	$val->durasi;
			
			if($no==1)
			{
				$jam_akhir	=	$this->tanggal->tambahMenit($tgl." ".$jam_mulai,$durasi); 
				$array=array( 
				"urut"			=>	$no,
				"durasi"		=>	$durasi,
				"jam_mulai"		=>	$jam_mulai,
				"jam_akhir"		=>	SUBSTR($jam_akhir,10,10)
				); 
		 
			$this->db->where("id",$val->id);	
			$this->db->update("kalkulasi_waktu",$array);	
			
			}else{
				$jam_akhir	=	$this->m_reff->goField("kalkulasi_waktu","jam_akhir","where kode='".$kode."' and urut='".($no-1)."' "); // jam akhir urutan sebelumnya
				
				$jam_awal	=	$this->tanggal->tambahMenit($tgl." ".$jam_akhir,0); 
				$jam_akhir	=	$this->tanggal->tambahMenit($jam_awal,$durasi); 
				$array=array( 
				"urut"			=>	$no,
				"durasi"		=>	$durasi,
				"jam_mulai"		=>	SUBSTR($jam_awal,10,10),
				"jam_akhir"		=>	SUBSTR($jam_akhir,10,10)
				); 
		 
			$this->db->where("id",$val->id);	
			$this->db->update("kalkulasi_waktu",$array);
				
			}
		 	$no++;
		}
	}
	
	function sisipkanAgenda(){
		$waktu	=	$this->input->post("waktu");
		$kode	=	$this->input->post("kode");
		$urut	=	$this->input->post("no");
		
				$array=array( 
				"durasi"		=>	30,
				"jam_mulai"		=>	$waktu,
				"jam_akhir"		=>	$waktu,
				"urut"			=>	($urut+1),
				"kode"			=>	$kode
				);  
			$this->db->insert("kalkulasi_waktu",$array);
		return	$this->susun_agenda();
	}
	
	function hapusAgenda(){
		$id		=	$this->input->post("id");
		$kode	=	$this->input->post("kode");
		$this->db->where("kode",$kode);
		$this->db->where("id",$id);
		return $this->db->delete("kalkulasi_waktu");
	}

}
 