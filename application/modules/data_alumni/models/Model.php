<?php
class Model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}

	function idu()
	{
		return $this->session->userdata("id");
	}
	/*===================================*/
	public function getData()
	{
		$this->_getData();
		if ($this->input->post("length") != -1)
			$this->db->limit($this->input->post("length"), $this->input->post("start"));
		return $this->db->get()->result();
	}
	private function _getData()
	{

		// conditional gender 
		$dtjk	= $this->input->post("jk");
		if ($dtjk) {
			$this->db->where("jk", $dtjk);
		}

		// conditional thun lulus 
		$dtthnLulus	= $this->input->post("thnLulus");
		if ($dtthnLulus) {
			$this->db->where("id_tahun", $dtthnLulus);
		}

		// conditional kelas
		$dtkelas	= $this->input->post("kelas");
		if ($dtkelas) {
			$this->db->where("id_kelas_3", $dtkelas);
		}

		// conditional pekerjaan
		$dtpekerjaan	= $this->input->post("pekerjaan");
		if ($dtpekerjaan) {
			$this->db->where("id_pekerjaan", $dtpekerjaan);
		}

		// conditional goldar
		$dtgoldar	= $this->input->post("goldar");
		if ($dtgoldar) {
			$this->db->where("id_goldar", $dtgoldar);
		}

		if (isset($_POST['search']['value'])) {
			$searchkey = $_POST['search']['value'];

			$query = array(
				"nama_depan" => $searchkey,
				"nama_belakang" => $searchkey,

			);
			$this->db->group_start()
				->or_like($query)
				->group_end();
		}
		$this->db->order_by("nama_depan", "asc");
		$query = $this->db->from("data_alumni");
		return $query;
	}



	public function count()
	{
		$this->_getData();

		return $this->db->get()->num_rows();
	}

	function insert()
	{
		$form	=	$this->input->post("f");
		$pass   =   $this->input->post("password");
		$md5    =   md5($pass);
		$this->db->set($form);
		$this->db->set("password", $md5);
		return $this->db->insert("data_alumni");
	}
	function update()
	{
		$id		=	$this->input->post("id");
		$form	=	$this->input->post("f");
		$pass   =   $this->input->post("password");
		$md5    =   md5($pass);
		$this->db->set($form);
		$this->db->set("password", $md5);
		$this->db->where("id", $id);
		return $this->db->update("data_alumni");
	}

	function hapus()
	{
		$id	=	$this->input->post("id");
		$this->db->where("id", $id);
		return $this->db->delete("data_alumni");
	}

	// getPekerjaan
	function getPekerjaan()
	{
		return  $this->db->get('tr_pekerjaan')->result();
	}

	function getPekerjaanByid($id)
	{
		$this->db->select('nama');
		$this->db->from('tr_pekerjaan');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}



	// getGoldar 
	function getGoldar()
	{
		return  $this->db->get('tr_goldar')->result();
	}

	function getGoldarByid($id)
	{
		$this->db->select('nama');
		$this->db->from('tr_goldar');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}


	// getPenghasilan 
	function getPenghasilan()
	{
		return  $this->db->get('tr_penghasilan')->result();
	}

	function getPenghasilanByid($id)
	{
		$this->db->select('penghasilan');
		$this->db->from('tr_penghasilan');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}


	// getKelas 
	function getKelas()
	{
		return $this->db->get('tr_kelas')->result();
	}

	function getKelasByid($id)
	{
		$this->db->select('nama_kelas');
		$this->db->from('tr_kelas');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}


	// getTahunLulus 
	function getTahunLulus()
	{
		return $this->db->get('tr_tahun')->result();
	}

	function getTahunLulusByid($id)
	{
		$this->db->select('tahun');
		$this->db->from('tr_tahun');
		$this->db->where('id', $id);
		return $this->db->get()->row();
	}
}
