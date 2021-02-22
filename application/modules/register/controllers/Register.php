<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("model", "mdl");
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jakarta');
	}


	public function index()
	{
		echo $this->load->view("register");
	}

	function insert()
	{

		$this->form_validation->set_rules('f[nama_depan]', 'nama depan', 'required');
		$this->form_validation->set_rules('f[nama_belakang]', 'nama belakang', 'required');
		$this->form_validation->set_rules('password', 'katasandi', 'required');
		$this->form_validation->set_rules('confirm_password', 'konfirmasi katasandi', 'required|matches[password]');
		$this->form_validation->set_rules('f[email]', 'email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$data = validation_errors();
			echo json_encode(validation_errors());
		} else {
			$data = $this->mdl->insert();
			echo json_encode($data);
		}
	}
}
