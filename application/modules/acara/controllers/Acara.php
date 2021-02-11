<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends MX_Controller 
{
	public function __construct()
	{
		parent::__construct();	
		$this->m_konfig->validasi_session(array("super","admin"));
		$this->load->model("model","mdl");
		date_default_timezone_set('Asia/Jakarta');
	}
	 
	function _template($data)
	{
		$this->load->view('temp/main',$data);	
	}
	
	function upload_peserta(){
	 $this->load->view("upload_peserta");
	}
	
	function susunan_acara(){
	 $this->load->view("susunan_acara");
	}
	function getKalkulasi(){
		$this->mdl->susun_agenda();
	 $this->load->view("getKalkulasi");
	}
	
	
	function input_form(){
			$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo $this->load->view("input_form");
		}else{
			$data['konten']="input_form";
			$this->_template($data);
		}
	} 
	public function index()
	{ 	
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo $this->load->view("index");
		}else{
			$data['konten']="index";
			$this->_template($data);
		}
		
	}
	public function detail_proses()
	{ 	
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo $this->load->view("detail_proses");
		}else{
			$data['konten']="detail_proses";
			$this->_template($data);
		}
		
	}
	
	public function form($id=null)
	{ 	
	if($id==null){ $this->index(); return false;}
	
	
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{		 $data["id"]=$id;
			echo $this->load->view("form",$data);
		}else{
			 $data["id"]=$id;
			$data['konten']="form";
			$this->_template($data);
		}
		
	}	
	
	
	public function data()
	{ 	
 	    $ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{		 
			echo $this->load->view("data");
		}else{ 
			$data['konten']="data";
			$this->_template($data);
		}
		
	}
	
	
	function baru(){
		$this->index();
	}

	function getData()
	{
		$list = $this->mdl->getData();
		$data = array();
		$no = $_POST['start'];
		$no = $no+1;
		foreach ($list as $dataDB) {
		$id	= $dataDB->id;
			  
			  
$acr	=	$this->db->get_where("tr_jenis_acara",array("id"=>$dataDB->id_jenis_acara))->row();
$jenis	=	isset($acr->jenis)?($acr->jenis):"";
$acara	=	isset($acr->acara)?($acr->acara):"";
$acara	=  $acara." -  ".$jenis ;		  
$durasi	=  isset($dataDB->durasi)?($dataDB->durasi):"";	  
$tgl	=  isset($dataDB->tgl)?($dataDB->tgl):"";	  
if($tgl){
	$tgl	=	$this->tanggal->hariLengkap($tgl,"/");
}else{
	$tgl="";
}


$kelengkapan =	"<a href='".base_url()."acara/detail_proses?id=".$dataDB->id."'   class='menuclick btn btn-grd-info  btn-sm '> <span class='font13 sadow'> status</span> </a>";
$action		 =	'<div class="btn-group" role="group"  >
                         <button type="button" class="btn bg-grey  btn-sm waves-effect waves-light ti-trash">  </button>
                        <button type="button" class="btn bg-teal  btn-sm waves-effect waves-light ti-pencil-alt"> Edit </button>
                     
                  </div>';		  
			$row = array();
			$row[] = $no++;
			$row[] = "<div style='max-width:200px; white-space:normal;word-wrap:break-word'>".$dataDB->judul_acara."</div>";
			$row[] = $tgl. " (".$durasi. " hari)";
			$row[] = $acara;
			$row[] = $kelengkapan;
			$row[] = $action;
			
			 
			 
			  
			//add html for action
			$data[] = $row;
			}
			
		//$csrf_name = $this->security->get_csrf_token_name();
		//$csrf_hash = $this->security->get_csrf_hash(); 
		$output = array(
		"draw" => $_POST['draw'],
		"recordsTotal" => $c=$this->mdl->count(),
		"recordsFiltered" =>$c,
		"data" => $data,
		);
		//output to json format
		//$output[$csrf_name] = $csrf_hash;
		echo json_encode($output);
	}
	
	
	function insert(){
		echo $this->mdl->insert();
	}

	function newForm(){
		echo $this->mdl->newForm();
	}
	
	
	function upload_file_peserta()
	{		
			echo json_encode($this->mdl->upload_file_peserta());
	}
	function reload_dataTugas(){
		$kode = $this->input->post("kode");
		$db   = $this->db->get_where("data_acara",array("kode"=>$kode))->row();
		$file = isset($db->file_peserta)?($db->file_peserta):"";
	 
		if($file){
			echo '
			<div class="btn-group">
		<a href="'.$this->m_reff->pengaturan(2)."?f=".$this->m_reff->encrypt($file) .'" class=" btn btn-sm btn-outline-info btn-round cursor font12 btn-outline-grey"><i class="fa fa-file"></i> Download: file peserta</a>
		<button  onclick="upload_peserta()" type="button"   class="btn waves-effect btn btn-outline-info btn-round btn-sm"><i class="fa fa-cloud-upload"></i> Upload ulang</button>
		</div>
			
			';
		}else{
			echo '<button  onclick="upload_peserta()" type="button"   class="btn waves-effect btn btn-outline-info btn-round btn-sm"><i class="fa fa-cloud-upload"></i> Upload  </button>';
		}
	 
	}
	
	function setKalkulasi(){
		echo json_encode($this->mdl->setKalkulasi());
	}
	function addKalkulasi(){
		echo json_encode($this->mdl->addKalkulasi());
	}
	function setAganda(){
		echo json_encode($this->mdl->setAganda());
	}
	function sisipkanAgenda(){
		echo json_encode($this->mdl->sisipkanAgenda());
	}function hapusAgenda(){
		echo json_encode($this->mdl->hapusAgenda());
	}
}
