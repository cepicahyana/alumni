<?php

class Model extends CI_Model  {
    
		
	function __construct()
    {
        parent::__construct();
    }
	
	 function get_open($tbl)
	{
		$query=$this->_get_datatables_open($tbl);
		if($_POST['length'] != -1)
		$query.=" limit ".$_POST['start'].",".$_POST['length'];
		return $this->db->query($query)->result();
	}
	public function count_file($tbl)
	{				
		$query = $this->_get_datatables_open($tbl);
        return  $this->db->query($query)->num_rows();
	}

	function get_rombel($tbl)
	{
		$query=$this->_get_datatables_rombel($tbl);
		if($_POST['length'] != -1)
		$query.=" limit ".$_POST['start'].",".$_POST['length'];
		return $this->db->query($query)->result();
	}
	public function count_file_rombel($tbl)
	{				
		$query = $this->_get_datatables_rombel($tbl);
        return  $this->db->query($query)->num_rows();
	}
	private function _get_datatables_rombel($tbl)
	{
		$jurusan=$this->input->post("jurusan");
		$tingkat=$this->input->post("tingkat");
		$filter="";
		if($jurusan)
		{
			$filter.="AND id_jurusan='".$jurusan."'";
		}
		if($tingkat)
		{
			$filter.="AND id_tk='".$tingkat."'";
		}
 
	$query="select * from ".$tbl."  where  1='1'   $filter ";
		if($_POST['search']['value']){
		$searchkey=$_POST['search']['value'];
			$query.=" AND (
			 alias LIKE '%".$searchkey."%'  or
			 nama LIKE '%".$searchkey."%'  or
			 nama_jurusan LIKE '%".$searchkey."%'  
			) ";
		}

		$column = array('', 'nama'  );
		$i=0;
		foreach ($column as $item) 
		{
		$column[$i] = $item;
		}
		
		 
		$query.=" order by id_tk,id_jurusan,nama_kelas asc";
		 
		return $query;
	
	}	
	
	
	
	function get_mapel($tbl)
	{
		$query=$this->_get_datatables_mapel($tbl);
		if($_POST['length'] != -1)
		$query.=" limit ".$_POST['start'].",".$_POST['length'];
		return $this->db->query($query)->result();
	}
	public function count_file_mapel($tbl)
	{				
		$query = $this->_get_datatables_mapel($tbl);
        return  $this->db->query($query)->num_rows();
	}
	private function _get_datatables_mapel($tbl)
	{
		$jurusan=$this->input->post("jurusan");
		$tingkat=$this->input->post("tingkat");
		$filter="";
		if($jurusan)
		{
			$filter.="AND id_jurusan='".$jurusan."'";
		}
		if($tingkat)
		{
			$filter.="AND id_tk='".$tingkat."'";
		}
 
	$query="select * from ".$tbl."  where  1='1'   $filter ";
		if($_POST['search']['value']){
		$searchkey=$_POST['search']['value'];
			$query.=" AND (
			 k_mapel LIKE '%".$searchkey."%'  or
			 nama LIKE '%".$searchkey."%'   
			) ";
		}

		$column = array('', 'nama'  );
		$i=0;
		foreach ($column as $item) 
		{
		$column[$i] = $item;
		}
		
		 
		$query.=" order by id_tk,id_jurusan,nama asc";
		 
		return $query;
	
	}	
	
	
	
	
	
	
	
	  function dataProfile()
	 {
		$idu=$this->session->userdata("id");
		$this->db->where("id_admin",$idu);
		return $this->db->get("admin")->row();
		 
	 }
	private function _get_datatables_open($tbl)
	{
		$dpd=$this->input->post("dpd");
		$filter="";
		if($dpd)
		{
			$filter.="AND kode_dpd='".$dpd."'";
		}
	$idu=$this->session->userdata("id");
	$query="select * from ".$tbl."  where  1='1'   $filter ";
		if($_POST['search']['value']){
		$searchkey=$_POST['search']['value'];
			$query.=" AND (
			 nama LIKE '%".$searchkey."%'  
			) ";
		}

		$column = array('', 'nama'  );
		$i=0;
		foreach ($column as $item) 
		{
		$column[$i] = $item;
		}
		
		if(isset($_POST['order']))
		{
		$query.=" order by nama asc";
		} 
		else if(isset($order))
		{
			$order = $order;
			$query.=" order by ".key($order)." ".$order[key($order)] ;
		}
		return $query;
	
	}	///-----------------------------------ajax//
 
	 
	
	 
	function hapus($tbl,$id)
	{	
		 
		$this->db->where("id",$id);
	return	$this->db->delete($tbl);
		
	}
	
	function update($tbl)
	{	
		$var=array();
		$var["size"]="true"; 
		$var["file"]="true";
		$var["validasi"]="true"; 
		$input=$this->input->post("f");
		$data=$this->security->xss_clean($input);
		 
			 if(isset($_FILES["poto"]['tmp_name']))
			{  	$form="poto"; $dok="img";
				$before_file=$this->m_reff->goField("tm_referensi","poto","where id='2'");
				$file=$this->m_reff->upload_file($form,$dok,$nama_file_awal="ttd",$type_file_yg_diizinkan="JPG,JPEG,PNG",$sizeFile="3000000",$before_file);
				if($file["validasi"]!=false)
				{
					
					$this->db->set("poto",$file["name"]);
					$id=$this->input->post("id_");
					$this->db->where("id",$id);
					$this->db->update($tbl,$data);
					
				}
				
			}else{
					$id=$this->input->post("id_");
					$this->db->where("id",$id);
					$this->db->update($tbl,$data);
			}
	
			return $var;
 
	}
 
	 function insert($tbl)
	{	
		$var=array();
		$var["size"]="true"; 
		$var["file"]="true";
		$var["validasi"]="true"; 
		$input=$this->input->post("f");
		$data=$this->security->xss_clean($input);
				$this->db->insert($tbl,$data);
				return $var;
 
	}
 
	 
	function digunakan($tbl,$id)
	{
		$this->db->where("id",$id);
		return $this->db->get($tbl)->num_rows();
	}
	
	function add_kelas()
	{
		$input=$this->input->post("f");
		$data=$this->security->xss_clean($input);
	return	$this->db->insert("tm_kelas",$data);
	}
	
	function update_rombel()
	{
		$input=$this->input->post("f");
		$data=$this->security->xss_clean($input);
		$this->db->where("id",$this->input->post("id"));
	return	$this->db->update("tm_kelas",$data);
	}
	function hapus_kelas($id)
	{
		$this->db->where("id",$id);
		return	$this->db->delete("tm_kelas");
	}
	/*==============MAPL===================*/
	function hapus_mapel($id)
	{
		$this->db->where("id",$id);
		return	$this->db->delete("tr_mapel");
	}
	function cekMapel($id_tk,$id_jurusan,$nama,$id=null)
	{
		$this->db->where("id_tk",$id_tk);
		$this->db->where("id_jurusan",$id_jurusan);
		$this->db->where("nama",$nama);
		if($id){
		$this->db->where("id!=",$id);
		}
	return	$this->db->get("tr_mapel")->num_rows();
	}
	function add_mapel()
	{
		$id_tk=$this->input->post("f[id_tk]");
		$id_jurusan=$this->input->post("f[id_jurusan]");
		$nama=$this->input->post("f[nama]");
		$cek=$this->cekMapel($id_tk,$id_jurusan,$nama);
		
		if($cek)
		{
			$var["mapel_duplicate"]=true;
		}else{
				$input=$this->input->post("f");
				$data=$this->security->xss_clean($input);
				$this->db->insert("tr_mapel",$data);
				$var["mapel_duplicate"]=false;
		}
		return $var;
	}
	function update_mapel()
	{
		$id=$this->input->post("id");
		$id_tk=$this->input->post("f[id_tk]");
		$id_jurusan=$this->input->post("f[id_jurusan]");
		$nama=$this->input->post("f[nama]");
		$cek=$this->cekMapel($id_tk,$id_jurusan,$nama,$id);
		if($cek)
		{
			$var["mapel_duplicate"]=true;
		}else{
				$input=$this->input->post("f");
				$data=$this->security->xss_clean($input);
				$this->db->where("id",$id);
				$this->db->update("tr_mapel",$data);
				$var["mapel_duplicate"]=false;
		}
		return $var;
	}
	
	function import_data_mapel()
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
				return $this->importMapel("file");
			 
		}else{
				return $var;
		}
		
	}

function cek_mapel($tk,$jurusan,$nama)
{
			$this->db->where("id_tk",$tk);
			$this->db->where("id_jurusan",$jurusan);
			$this->db->where("UCASE(nama)",strtoupper($nama) );
	return  $this->db->get("tr_mapel")->num_rows();
}

function importMapel($file_form)
{		
		$this->load->library("PHPExcel");
		$insert=0;$gagal=0;$edit=0;$validasi_hp=true;$validasi=true;
		$file   = explode('.',$_FILES[$file_form]['name']);
		$length = count($file);
		if($file[$length -1] == 'xlsx' || $file[$length -1] == 'xls'){
         $tmp    = $_FILES[$file_form]['tmp_name']; 
	 
			    $load = PHPExcel_IOFactory::load($tmp);
                $sheets = $load->getActiveSheet()->toArray(null,true,true,true);
				$i=1;
					 
				foreach ($sheets as $sheet) {
				if ($i > 1) {						
						
						 $tk=isset($sheet[0])?($sheet[0]):"";
						 $id_jurusan=isset($sheet[1])?($sheet[1]):"";
						 $nama=isset($sheet[2])?($sheet[2]):"";						 
						 $sts=isset($sheet[3])?($sheet[3]):"";						 
						$cek_mapel=$this->cek_mapel($tk,$id_jurusan,$nama);
						if($cek_mapel){
							$edit++;
						}else{
							$dataray=array(
								"nama"=>$nama,
								"id_tk"=>$tk,
								"id_jurusan"=>$id_jurusan,
								"sts"=>$sts,
								);
							$this->db->insert("tr_mapel",$dataray);
							$insert++;
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
	function jmlAnggota($dpd,$korwil=null)
	{
		if($korwil)
		{
			$this->db->where("kode_korwil",$korwil);
		}
		$this->db->where("kode_dpd",$dpd);
		return $this->db->get("data_kartu")->num_rows();
	}
}
 