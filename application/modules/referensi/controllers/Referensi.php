<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Referensi extends CI_Controller {

	

	function __construct()
	{
		parent::__construct();	
		$this->m_konfig->validasi_session(array("admin","operator"));
		$this->load->model("Model","mdl");
		date_default_timezone_set('Asia/Jakarta');
	}
	function setEmail()
	{
	    $val=$this->input->get_post("val");
	    $val2=$this->input->get_post("val2");
	    $this->db->where("id",1);
	    $this->db->set("val",$val);
	    $this->db->set("val2",$val2);
	    echo $this->db->update("pengaturan");
	}
	 
	function _template($data)
	{
	$this->load->view('temp/main',$data);	
	}
	 	public function email()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("email");
		}else{
			$data['konten']="email";
			$this->_template($data);
		}
	}
	public function index()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("side");
		}else{
			$data['konten']="side";
			$data['header']="side";
			$this->_template($data);
		}
	}
	 
	public function ref()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("referensi");
		}else{
			$data['konten']="referensi";
			$this->_template($data);
		}
	}
		public function dpd()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("dpd");
		}else{
			$data['konten']="dpd";
			$this->_template($data);
		}
	} 
		public function korwil()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("korwil");
		}else{
			$data['konten']="korwil";
			$this->_template($data);
		}
	} 
	public function room()
	{
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo	$this->load->view("room");
		}else{
			$data['konten']="room";
			$this->_template($data);
		}
	}
	 
	function hapus()
	{	$id=$this->input->post("id");
		$tbl=$this->uri->segment("3");
		echo $this->mdl->hapus($tbl,$id);
	}
	
	function hapus_kelas()
	{	$id=$this->input->post("id");
		$this->db->query("UPDATE data_pegawai set id_kelas='' where id_kelas='".$id."'");
		echo $this->mdl->hapus_kelas($id);
	}
	function hapus_mapel()
	{	$id=$this->input->post("id");
	 	echo $this->mdl->hapus_mapel($id);
	}
	
	
	 function data()
	{	
		$tbl=$this->uri->segment("3");
		$list = $this->mdl->get_open($tbl);
		$data = array();
		$no = $_POST['start'];
		$no =$no+1;
		foreach ($list as $dataDB) {
		////
		
		 $color=isset($dataDB->color)?($dataDB->color):"";
		 $lokasi=isset($dataDB->lokasi)?($dataDB->lokasi):"";
		 $konten=isset($dataDB->kode)?($dataDB->kode):"";
		 $kode_dpd=isset($dataDB->kode_dpd)?($dataDB->kode_dpd):"";
	/*	 if($dataDB->id!=2)
		{
			$konten=$dataDB->konten;
		}else{
			$konten="<img width='100px' src='".base_url()."file_upload/img/".$dataDB->poto."'>";
		}*/
		
		  $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
                                    <button type="button" onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->nama.'`,`'.$konten.'`)" class="btn bg-teal waves-effect waves-light">EDIT</button>
                                    <button type="button" onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama.'`,`'.$konten.'`)" class="btn bg-pink waves-effect waves-light">Hapus</button>  
                                </div>
                                
                            </div>';
           	if($tbl=="tr_korwil"){
                            	     $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
                                    <button type="button" onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->nama.'`,`'.$konten.'`,`'.$kode_dpd.'`)" class="btn bg-teal waves-effect waves-light">EDIT</button>
                                    <button type="button" onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama.'`,`'.$konten.'`)" class="btn bg-pink waves-effect waves-light">Hapus</button>  
                                </div>
                                
                            </div>';
			}
			$row = array();
			$row[] = "<span class='size'>".$no++."</span>";	
			if($tbl=="tr_korwil"){
			$row[] = "<span class='size'><b>".$this->mdl->jmlAnggota($dataDB->kode_dpd,$dataDB->kode)." </b></span>";
			$row[] = "<span class='size'>".$this->m_reff->goField('tr_dpd','nama','where kode="'.$dataDB->kode_dpd.'"')." </span>";
			}
			if($tbl=="tr_dpd"){
			$row[] = "<span class='size'><b>".$this->mdl->jmlAnggota($dataDB->kode)." </b></span>";
			 }
			$row[] = "<span class='size'>".$konten." </span>";
			$row[] = "<span class='size'>".$dataDB->nama." </span>";
		    
		/*	if($tbl=="tm_room")
			{
			 $row[] = "<span class='size' style='color:".$dataDB->color."' ><b>".$dataDB->color."</b> </span>";
			}
		 */
			//add html for action
			$row[] = $tombol;		 
			$data[] = $row;
			}
			
	 

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->mdl->count_file($tbl),
						"recordsFiltered" =>$this->mdl->count_file($tbl),
						"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}
	function editRombel()
	{
		$this->load->view("editRombel");
	}
	function editMapel()
	{
		$this->load->view("editMapel");
	}
	function add_room()
	{
		echo $this->load->view("add_room");
	}
	function add_kelas()
	{
		
		
		echo $this->mdl->add_kelas();
		$db=$this->db->query("SELECT max(id) as id_kelas from tm_kelas")->row();
		$idkelas=isset($db->id_kelas)?($db->id_kelas):"";
		$id_wali=$this->input->post("f[id_wali]");
		$this->db->query("UPDATE   data_pegawai set id_kelas='".$idkelas."' where id='".$id_wali."' ");
	}
	function update_rombel()
	{
		$id_wali=$this->input->post("f[id_wali]");
		$this->db->query("UPDATE tm_kelas set id_wali='' where id_wali='".$id_wali."' ");
		echo $this->mdl->update_rombel();
	 
		$idkelas=$this->input->post("id");
	
		
		$this->db->query("UPDATE data_pegawai set id_kelas='' where id_kelas='".$idkelas."' ");
		$this->db->query("UPDATE data_pegawai set id_kelas='".$idkelas."' where id='".$id_wali."' ");
	}
	
	
	function add_mapel()
	{		
		$echo=$this->mdl->add_mapel();
		echo json_encode($echo);
	}
	function update_mapel()
	{
		$echo=$this->mdl->update_mapel();
		echo json_encode($echo);
	}

	/*------------------getRombel------------------------*/
	function getRombel()
	{	
		$tbl="v_kelas";
		$list = $this->mdl->get_rombel($tbl);
		$data = array();
		$no = $_POST['start'];
		$no =$no+1;
		foreach ($list as $dataDB) {
		////
 
		  $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
              <button type="button" onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->id_tk.'`,`'.$dataDB->id_jurusan.'`,`'.$dataDB->nama_kelas.'`,`'.$dataDB->id_wali.'` )" class="btn bg-teal waves-effect waves-light">EDIT</button>
              <button type="button" onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama.'`)" class="btn bg-blue-grey waves-effect waves-light">HAPUS</button>
										
                                </div>
                                
                            </div>';
			$row = array();
			$row[] = "<span class='size'>".$no++."</span>";				 
			$row[] = "<span class='size'>".$dataDB->nama_tingkat." </span>";
			$row[] = "<span class='size'>".$dataDB->alias." </span>";
			$row[] = "<span class='size'>".$dataDB->nama_kelas." </span>";
			$row[] = "<span class='size'>".$this->m_reff->goField("data_pegawai","nama","where id='".$dataDB->id_wali."'")." </span>";
			 
			//add html for action
			$row[] = $tombol;		 
			$data[] = $row;
			}
			
	 

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->mdl->count_file_rombel($tbl),
						"recordsFiltered" =>$this->mdl->count_file_rombel($tbl),
						"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}
	/*------------------------------*/
	/*------------------getMapel------------------------*/
	function getMapel()
	{	
		$tbl="tr_mapel";
		$list = $this->mdl->get_mapel($tbl);
		$data = array();
		$no = $_POST['start'];
		$no =$no+1;
		foreach ($list as $dataDB) {
		////
 
		  $tombol='<div class="demo-button-groups">
                                <div class="btn-group" role="group">
              <button type="button" onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->id_tk.'`,`'.$dataDB->id_jurusan.'`,`'.$dataDB->nama.'`,`'.$dataDB->k_mapel.'` )" class="btn bg-teal waves-effect waves-light">EDIT</button>
              <button type="button" onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama.'`)" class="btn bg-blue-grey waves-effect waves-light">HAPUS</button>
										
                                </div>
                                
                            </div>';
			$row = array();
			$row[] = "<span class='size'>".$no++."</span>";				 
			$row[] = "<span class='size'>".$this->m_reff->goField('tr_tingkat','nama','where id='.$dataDB->id_tk.'')." </span>";
			$row[] = "<span class='size'>".$this->m_reff->goField('tr_jurusan','alias','where id='.$dataDB->id_jurusan.'')." </span>";
			$row[] = "<span class='size'>".$dataDB->nama." </span>";
			$row[] = "<span class='size'>".$dataDB->k_mapel." </span>";
			 
			//add html for action
			$row[] = $tombol;		 
			$data[] = $row;
			}
			
	 

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->mdl->count_file_mapel($tbl),
						"recordsFiltered" =>$this->mdl->count_file_mapel($tbl),
						"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}
	/*------------------------------*/
	
	 function data_upload()
	{	$tbl=$this->uri->segment("3");
		$list = $this->mdl->get_open($tbl);
		$data = array();
		$no = $_POST['start'];
		$no =$no+1;
		foreach ($list as $dataDB) {
		////
		 if($dataDB->required==1)
		 {
		     $r="YA";
		 }else{
		     $r="TIDAK";
		 }
		  
			$row = array();
			$row[] = "<span class='size'>".$no++."</span>";				 
			$row[] = "<span class='size'>".$dataDB->nama." </span>";
		 	$row[] = "<span class='size'>".$dataDB->type." </span>";
		    $row[] = "<span class='size'>".$r." </span>";	  
			//add html for action
			$row[] = '
			<div class="btn-group-vertical">
                                    <button onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->nama.'`,`'.$dataDB->type.'`,`'.$dataDB->id_persyaratan.'`,`'.$dataDB->required.'`)" type="button" class="btn bg-teal waves-effect">EDIT  </button>
                                    <button onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama.'`)" type="button" class="btn bg-blue-grey waves-effect">HAPUS </button>
                                   
                                </div>
			 ';		$data[] = $row;
			}
			
	 

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->mdl->count_file($tbl),
						"recordsFiltered" =>$this->mdl->count_file($tbl),
						"data" => $data,
						);
		//output to json format
		echo json_encode($output);

	}
	
	function insert()
	{
	$tbl=$this->uri->segment(3);
	$data=$this->mdl->insert($tbl);
	echo json_encode($data);
	}
 
	 
	function update()
	{
	$tbl=$this->uri->segment(3);
	$data=$this->mdl->update($tbl);
	echo json_encode($data);
	}
	
	function save_()
	{
		$id=$this->input->post("id");
		$val=$this->input->post("val");
		$val=$this->security->xss_clean($val);
		$this->db->set("val",$val);
		$this->db->where("id",$id);
	echo $this->db->update("pengaturan");
	}
	function import_data_mapel()
	{
		 $data=$this->mdl->import_data_mapel();
	 	echo json_encode($data);
	}
	function setHonor()
	{
		$this->db->set("val",$this->input->post("honor"));
		$this->db->where("id",5);
		echo $this->db->update("tm_pengaturan");
	}
}