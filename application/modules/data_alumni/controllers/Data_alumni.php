<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_alumni extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->m_konfig->validasi_session(array("admin", "guru"));
		$this->load->model("model", "mdl");
		date_default_timezone_set('Asia/Jakarta');
	}

	function _template($data)
	{
		$this->load->view('temp/main', $data);
	}


	public function index()
	{
		$ajax = $this->input->get_post("ajax");
		if ($ajax == "yes") {
			echo $this->load->view("index");
		} else {
			$data['header'] = "Data Alumni";
			$data['konten'] = "index";
			$this->_template($data);
		}
	}
	function getData()
	{
		$list = $this->mdl->getData();
		$data = array();
		$no = $_POST['start'];
		$no = $no + 1;
		foreach ($list as $dataDB) {
			$id	= $dataDB->id;
			$action		 =	'<div class="btn-group" role="group"  >
								 <button onclick="hapus(`' . $dataDB->id . '`)" type="button" class="btn bg-grey  btn-sm waves-effect waves-light ti-trash"> <i title="hapus" class="ri-delete-bin-7-fill"></i>   </button>
								<button onclick="edit(`' . $dataDB->id . '`)" type="button" class="btn bg-teal  btn-sm waves-effect waves-light ti-pencil-alt"> <i class="ri-edit-2-fill"></i> Edit </button>
							 
                  </div>';
			$row = array();
			$row[] = $no++;
			$row[] = $dataDB->nama_depan . " " . $dataDB->nama_belakang;
			$row[] = $action;

			//add html for action
			$data[] = $row;
		}

		//$csrf_name = $this->security->get_csrf_token_name();
		//$csrf_hash = $this->security->get_csrf_hash(); 
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $c = $this->mdl->count(),
			"recordsFiltered" => $c,
			"data" => $data,
		);
		//output to json format
		//$output[$csrf_name] = $csrf_hash;
		echo json_encode($output);
	}
	function form_tambah()
	{
		$this->load->view("form_tambah");
	}
	function form_edit()
	{
		$data['pekerjaan'] = $this->mdl->getPekerjaan();
		$data['goldar'] = $this->mdl->getGoldar();
		$data['penghasilan'] = $this->mdl->getPenghasilan();
		$this->load->view("form_edit", $data);
	}

	function insert()
	{
		echo $this->mdl->insert();
	}
	function hapus()
	{
		echo $this->mdl->hapus();
	}
	function update()
	{
		echo $this->mdl->update();
	}
}
