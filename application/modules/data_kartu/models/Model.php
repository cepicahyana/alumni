<?php

class Model extends CI_Model  {
    
	var $tbl="data_kartu";
 
 	function __construct()
    {
        parent::__construct();
    }
	function idu()
	{
		return $this->session->userdata("id");
	}
	
	  function qr($id)
	 {
			
		 if($id){
			$filename = 'qr/'.$id;
			if (!file_exists($filename)) { 
					$this->load->library('ciqrcode');
					$params['data'] = $id;
					$params['level'] = 'H';
					$params['size'] = 10;
					$params['savename'] = FCPATH.'qr/'.$id.".png";
					return	$this->ciqrcode->generate($params);
			}
		 }
	 }
	function set()
	{
		$sts=$this->input->post("sts");
		$id=$this->input->post("id");
		if($sts==0){ $sts=1;}else{ $sts=0;}
		$this->db->set("sts",$sts);
		$this->db->where("id",$id);
		return $this->db->update($this->tbl);
	}
	 
	 function get_data()
	{
		$query=$this->_get_data();
		if($_POST['length'] != -1)
		$query.=" limit ".$_POST['start'].",".$_POST['length'];
		return $this->db->query($query)->result();
	}
	function _get_data()
	{
		    $filter="";
			$dpd=$this->input->get_post("dpd");
			$korwil=$this->input->get_post("korwil");
			if($dpd)
			{
				$filter.=" AND kode_dpd='".$dpd."'";
			}	
			if($korwil)
			{
				$filter.=" AND kode_korwil='".$korwil."'";
			}
		 
		$query="select * from data_kartu where 1=1  ".$filter;
			if($_POST['search']['value']){
			$searchkey=$_POST['search']['value'];
				$query.=" AND (
				nomor_anggota LIKE '%".$searchkey."%' or  
					pimpinan LIKE '%".$searchkey."%' or  
						nama_perusahaan LIKE '%".$searchkey."%' or  
						alamat LIKE '%".$searchkey."%' or  
							telp LIKE '%".$searchkey."%' or  
								npwp LIKE '%".$searchkey."%' or  
									email LIKE '%".$searchkey."%' or  
			                    	event LIKE '%".$searchkey."%' 
				) ";
			}

		$column = array('', 'owner'  );
		$i=0;
		foreach ($column as $item) 
		{
		$column[$i] = $item;
		}
		
		if(isset($_POST['order']))
		{
		$query.=" order by id   desc";
		} 
		else if(isset($order))
		{
			$order = $order;
			$query.=" order by ".key($order)." ".$order[key($order)] ;
		}
		return $query;
	}
	
	public function count()
	{				
		$query = $this->_get_data();
        return  $this->db->query($query)->num_rows();
	}
	function insert()
	{
 
		$post=$this->input->post("f");
		$post=$this->security->xss_clean($post);
  
		$jatuh_tempo=$this->input->post("jatuh_tempo");
		$jatuh_tempo=$this->tanggal->eng_($jatuh_tempo,"-");
        $nomor_anggota=$this->input->post("f[nomor_anggota]");
        $cek=$this->db->query("select * from data_kartu where nomor_anggota='".$nomor_anggota."' ")->num_rows();
        if($cek){
              $var["gagal"]=false; $var["info"]="Nomor NIA pernah diinput";
              return $var;
        }
  	    $this->qr($nomor_anggota);
		$this->db->set("jatuh_tempo",$jatuh_tempo);
		
		
		if(isset($_FILES["foto"]['tmp_name']))
		{   	$pullpath="dp";
			$before="";//$this->m_reff->goField("data_kartu","foto","where id='".$id."'");
			$file=$this->m_reff->upload_file("foto",$pullpath,"foto","all","20000000",$before);
			if($file["validasi"]!=false)
			{
				$opsi1="file_upload/".$pullpath."/".$file["name"]; 
				$this->db->set("foto",$opsi1);
			}			 
		}
		
		
	 	return $this->db->insert($this->tbl,$post);

	}
	function update()
	{
	 	$post=$this->input->post("f");
		$post=$this->security->xss_clean($post);
     	$id=$this->input->post("id");
		$jatuh_tempo=$this->input->post("jatuh_tempo");
		$jatuh_tempo=$this->tanggal->eng_($jatuh_tempo,"-");
        $nomor_anggota=$this->input->post("f[nomor_anggota]");
        $cek=$this->db->query("select * from data_kartu where nomor_anggota='".$nomor_anggota."' and id!='$id' ")->num_rows();
        if($cek){
              $var["gagal"]=false; $var["info"]="Nomor NIA pernah diinput";
              return $var;
        }
  	    $this->qr($nomor_anggota);
		$this->db->set("jatuh_tempo",$jatuh_tempo);
			$this->db->where("id",$id);
			
			
		if(isset($_FILES["foto"]['tmp_name']))
		{   	$pullpath="dp";
			$before="";//$this->m_reff->goField("data_kartu","foto","where id='".$id."'");
			$file=$this->m_reff->upload_file("foto",$pullpath,"foto","all","20000000",$before);
			if($file["validasi"]!=false)
			{
				$opsi1="file_upload/".$pullpath."/".$file["name"]; 
				$this->db->set("foto",$opsi1);
			}				 
		}
			
	 	return $this->db->update($this->tbl,$post);
	 
	}
	function hapus($id)
	{
		 
		$this->db->where("id",$id);
		return $this->db->delete("data_kartu");
	}
	
	 function import_data()
	{	
		$var=array();
		$var["size"]=true; 
		$var["file"]=true;
		$var["validasi"]=false; 
		$var["token"]=true; 
		 
		$idu=$this->session->userdata("id");
		$input=$this->input->post("f");
		$data=$this->security->xss_clean($input);
		if(isset($_FILES["file"]['tmp_name']))
		{
				return $this->importFile("file");
			 
		}else{
				return $var;
		}
		
	}
	
	function cek_nia($nia)
	{
	 return	$this->db->get_where($this->tbl,array("nomor_anggota"=>$nia))->num_rows();
	}
	
	function importFile($file_form)
	{		$this->load->library("PHPExcel");
		$insert=0;$gagal=0;$edit=0;$validasi_hp=true;$validasi=true;
		$file   = explode('.',$_FILES[$file_form]['name']);
		$length = count($file);
		if($file[$length -1] == 'xlsx' || $file[$length -1] == 'xls'){
         $tmp    = $_FILES[$file_form]['tmp_name']; 
	 
			    $load = PHPExcel_IOFactory::load($tmp);
                $sheets = $load->getActiveSheet()->toArray(null,true,true,true);
				$i=1;$no=0;
					 
				foreach ($sheets as $sheet) {
				if ($i > 1) {
				    $no=0;
				     $nia=isset($sheet[$no])?($sheet[$no]):"";
				    if($nia)
				    {
						 $no++;
						 $nia=isset($sheet[$no])?($sheet[$no]):"";
						 $nama_perusahaan=isset($sheet[$no++])?($sheet[$no]):"";
						 $pimpinan=isset($sheet[$no++])?($sheet[$no]):"";
						 $alamat=isset($sheet[$no++])?($sheet[$no]):"";
						 $telp=isset($sheet[$no++])?($sheet[$no]):"";
						 $telp=str_replace("`","",$telp);
						 $telp=str_replace("'","",$telp);
						 $npwp=isset($sheet[$no++])?($sheet[$no]):"";
						  $npwp=str_replace("`","",$npwp);
						 $npwp=str_replace("'","",$npwp);
						 
						 $siup=isset($sheet[$no++])?($sheet[$no]):"";
						  $siup=str_replace("`","",$siup);
						 $siup=str_replace("'","",$siup);
						 
						 $tdp=isset($sheet[$no++])?($sheet[$no]):"";
						  $tdp=str_replace("`","",$tdp);
						 $tdp=str_replace("'","",$tdp);
						  
						 $akta=isset($sheet[$no++])?($sheet[$no]):"";
						 $akta=str_replace("`","",$akta);
						 $akta=str_replace("'","",$akta);
						 
						 $email=isset($sheet[$no++])?($sheet[$no]):"";
						 $jatuh_tempo=isset($sheet[$no++])?($sheet[$no]):"";
						 $jatuh_tempo=$this->tanggal->format($jatuh_tempo);
						 $kode_dpd=isset($sheet[$no++])?($sheet[$no]):"";
						  $kode_dpd=str_replace("`","",$kode_dpd);
						 $kode_dpd=str_replace("'","",$kode_dpd);
						 $kode_dpd=sprintf("%02s", $kode_dpd);
						 
						 $kode_korwil=isset($sheet[$no++])?($sheet[$no]):"";
						 $kode_korwil=str_replace("`","",$kode_korwil);
						 $kode_korwil=str_replace("'","",$kode_korwil);
						 $kode_korwil=sprintf("%03s", $kode_korwil);
						 
						$cek_nia=$this->cek_nia($nia);
						if($cek_nia){
								
								$dataray=array(
								"nomor_anggota"=>$nia,
								"nama_perusahaan"=>$nama_perusahaan,
								"pimpinan"=>$pimpinan,
								"alamat"=>$alamat,
								"telp"=>$telp,
								"npwp"=>$npwp,
								 "siup"=>$siup,
								 "tdp"=>$tdp,
								"akta_perusahaan"=>$akta,
								"email"=>$email,
								"jatuh_tempo"=>$jatuh_tempo,
								"kode_dpd"=>$kode_dpd,
								"kode_korwil"=>$kode_korwil 
								);
								
							$this->update_data($dataray);
							$edit++;
							$this->qr($nia);
						}else{
							$dataray=array(
									"nomor_anggota"=>$nia,
								"nama_perusahaan"=>$nama_perusahaan,
								"pimpinan"=>$pimpinan,
								"alamat"=>$alamat,
								"telp"=>$telp,
								"npwp"=>$npwp,
								 "siup"=>$siup,
								 "tdp"=>$tdp,
								"akta_perusahaan"=>$akta,
								"email"=>$email,
								"jatuh_tempo"=>$jatuh_tempo,
								"kode_dpd"=>$kode_dpd,
								"kode_korwil"=>$kode_korwil 
								);
								if($nia){
							$this->insert_data($dataray);
							$insert++;
							$this->qr($nia);
								}
						}
				    }
				      
				}
				$i++;
                }
               
		}else{
			 $var["file"]=false;
			 $var["type_file"]="xlsx";
		}
			  $var["import_data"]=true;
			  $var["data_insert"]=$insert;
			  $var["data_gagal"]=$gagal;
			  $var["data_edit"]=$edit;
			  $var["hp"]=$validasi_hp;
			  $var["validasi"]=$validasi;
		return $var;
	}
	 
	 function update_data($dataray)
	{
			$this->db->where("nomor_anggota",$dataray['nomor_anggota']);
	return	$this->db->update($this->tbl,$dataray);
	}
	 function insert_data($dataray)
	{
		return	$this->db->insert($this->tbl,$dataray);
	}
}