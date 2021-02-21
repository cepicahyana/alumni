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
		$this->db->order_by("nama_depan", "desc");
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



	// getGoldar 
	function getGoldar()
	{
		return  $this->db->get('tr_goldar')->result();
	}


	// getPenghasilan 
	function getPenghasilan()
	{
		return  $this->db->get('tr_penghasilan')->result();
	}

	// getTahunLulus 
	function getTahunLulus()
	{
		return $this->db->get('tr_tahun')->result();
	}
}
