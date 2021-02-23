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
			$data['kelas'] = $this->mdl->getKelas();
			$data['jp'] = $this->mdl->getJp();
			$data['agama'] = $this->mdl->getAgama();
			$data['pekerjaan'] = $this->mdl->getPekerjaan();
			$data['tahunLulus'] = $this->mdl->getTahunLulus();
			$data['goldar'] = $this->mdl->getGoldar();
			echo $this->load->view("index", $data);
		} else {
			$data['agama'] = $this->mdl->getAgama();
			$data['jp'] = $this->mdl->getJp();
			$data['kelas'] = $this->mdl->getKelas();
			$data['pekerjaan'] = $this->mdl->getPekerjaan();
			$data['tahunLulus'] = $this->mdl->getTahunLulus();
			$data['goldar'] = $this->mdl->getGoldar();
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

			// goldar id
			$goldar = $this->mdl->getGoldarByid($dataDB->id_goldar);

			// penghasilan id
			$penghasilan = $this->mdl->getPenghasilanByid($dataDB->id_penghasilan);

			// pekerjaan id
			$pekerjaan = $this->mdl->getPekerjaanByid($dataDB->id_pekerjaan);

			// kelas id
			$kelas = $this->mdl->getKelasByid($dataDB->id_kelas_3);

			// tahun lulus 
			$thnLulus = $this->mdl->getTahunLulusByid($dataDB->id_tahun);

			// agama
			$agama = $this->mdl->getAgamaByid($dataDB->id_agama);

			// jenjang pendidikan
			$jp = $this->mdl->getJpByid($dataDB->id_jp);

			// status pernikahan 
			if ($dataDB->sts_menikah == 1) {
				$stsMenikah = "Belum Menikah";
			} else if ($dataDB->sts_menikah == 2) {
				$stsMenikah = "Sudah Menikah";
			} else {
				$stsMenikah = "Cerai";
			}



			$id	= $dataDB->id;
			$action		 =	'<div class="btn-group" role="group"  >
								 <button onclick="hapus(`' . $dataDB->id . '`)" type="button" class="btn bg-grey  btn-sm waves-effect waves-light ti-trash"> <i title="hapus" class="ri-delete-bin-7-fill"></i>   </button>
								<button onclick="edit(`' . $dataDB->id . '`)" type="button" class="btn bg-teal  btn-sm waves-effect waves-light ti-pencil-alt"> <i class="ri-edit-2-fill"></i> Edit </button>
							 
                  </div>';
			$row = array();
			$row[] = $no++;
			// $row[] = $dataDB->username;
			$row[] = $dataDB->nama_depan . " " . $dataDB->nama_belakang;
			$row[] = $dataDB->jk;
			$row[] = $dataDB->hp;
			$row[] = $dataDB->email;
			$row[] = $dataDB->alamat;
			$row[]	= isset($goldar->nama) ? ($goldar->nama) : "";
			// $row[]	= isset($penghasilan->penghasilan) ? ($penghasilan->penghasilan) : "";
			$row[]	= isset($kelas->nama_kelas) ? ($kelas->nama_kelas) : "";
			$row[]	= isset($thnLulus->tahun) ? ($thnLulus->tahun) : "";
			$row[]	= isset($agama->nama) ? ($agama->nama) : "";
			$row[]	= isset($jp->nama) ? ($jp->nama) : "";
			$row[]	= isset($pekerjaan->nama) ? ($pekerjaan->nama) : "";
			$row[] = $dataDB->jml_anak;
			$row[] = $stsMenikah;
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
		$data['jp'] = $this->mdl->getJp();
		$data['agama'] = $this->mdl->getAgama();
		$data['pekerjaan'] = $this->mdl->getPekerjaan();
		$data['kelas'] = $this->mdl->getKelas();
		$data['goldar'] = $this->mdl->getGoldar();
		$data['penghasilan'] = $this->mdl->getPenghasilan();
		$data['tahunLulus'] = $this->mdl->getTahunLulus();
		$this->load->view("form_tambah", $data);
	}
	function form_edit()
	{
		$data['jp'] = $this->mdl->getJp();
		$data['agama'] = $this->mdl->getAgama();
		$data['kelas'] = $this->mdl->getKelas();
		$data['pekerjaan'] = $this->mdl->getPekerjaan();
		$data['goldar'] = $this->mdl->getGoldar();
		$data['penghasilan'] = $this->mdl->getPenghasilan();
		$data['tahunLulus'] = $this->mdl->getTahunLulus();
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
