<?php
class Model extends CI_Model
{


	public function __construct() {
        parent::__construct();
    }



	function idu(){
		return $this->session->userdata("id");
	}
	/*===================================*/
	public function getData()
	{
		$this->_getData();
		if($this->input->post("length") != -1)
		$this->db->limit($this->input->post("length"),$this->input->post("start"));
	 	return $this->db->get()->result();
	}
	private function _getData()
	{

		 if(isset($_POST['search']['value'])){
			$searchkey=$_POST['search']['value'];

				$query=array(
				"judul"=>$searchkey,
				"tgl"=>$searchkey,
				"isi"=>$searchkey,
				"sts"=>$searchkey,

				);
				$this->db->group_start()
                        ->or_like($query)
                ->group_end();

			}
		$this->db->order_by("id","desc");
		$query=$this->db->from("data_informasi");
		return $query;

	}
	public function count()
	{
		$this->_getData();
		return $this->db->get()->num_rows();
	}

	function insert(){
		$form	=	$this->input->post("f");
		$this->db->set($form);
		return $this->db->insert("data_informasi");
	}
	function update(){
		$id		=	$this->input->post("id");
		$form	=	$this->input->post("f");
		$this->db->set($form);
		$this->db->where("id",$id);
		return $this->db->update("data_informasi");
	}

	function hapus(){
		$id	=	$this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("data_informasi");
	}

}
