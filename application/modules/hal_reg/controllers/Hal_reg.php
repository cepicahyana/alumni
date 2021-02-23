<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hal_reg extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();	 
		$this->m_konfig->validasi_session(array("admin","guru"));
		$this->load->model("model","mdl");
		date_default_timezone_set('Asia/Jakarta');
	}
	 
	function _template($data)
	{
		$this->load->view('temp/main',$data);	
	}
	
	 
	public function index()
	{ 	
		$ajax=$this->input->get_post("ajax");
		if($ajax=="yes")
		{
			echo $this->load->view("index");
		}else{
			$data['header']="Data Halaman Registrasi";
			$data['konten']="index";
			$this->_template($data);
		}
		
	}
	function set(){
		echo $this->mdl->set();
	}
}
