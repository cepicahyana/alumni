<?php
class Model extends CI_Model
{

    var $tbl="data_kri";
	public function __construct() {
        parent::__construct();
    }
	
	
	/*===================================*/
	public function get_data_statuskri()
	{
		$this->_get_datatables_statuskri();
		if($this->input->post("length") != -1) 
		$this->db->limit($this->input->post("length"),$this->input->post("start"));
	 	return $this->db->get()->result();
	}
	private function _get_datatables_statuskri() 
	{	
		 //$this->db->where("level","3"); 
		 if(isset($_POST['search']['value'])){
			$searchkey=$_POST['search']['value'];
				  
				$query=array(
				"namadata"=>$searchkey
				);
				$this->db->group_start()
                        ->or_like($query)
                ->group_end();
				  
			}
		$this->db->order_by("id","asc"); 
		$query=$this->db->from($this->tbl);
		return $query;
	
	}	
	public function count_data_statuskri()
	{		
		$this->_get_datatables_statuskri();
		return $this->db->get()->num_rows();
	}

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function jml_pendidikan($id)
	{
		$this->db->where('id_jp',$id);
		return $this->db->get("data_alumni")->num_rows();
	}

	public function jml_goldar($id)
	{
		$this->db->where('id_goldar',$id);
		return $this->db->get("data_alumni")->num_rows();
	}

	public function jml_penghasilan($id)
	{
		$this->db->where('id_penghasilan',$id);
		return $this->db->get("data_alumni")->num_rows();
	}

	public function jml_profesi($id)
	{
		$this->db->where('id_pekerjaan',$id);
		return $this->db->get("data_alumni")->num_rows();
	}

	public function graph()
	{
		$data = $this->db->query("SELECT * from tr_goldar");
		return $data->result();
	}

	public function jml_alumni()
	{
		$this->db->select('1');
		$this->db->where('status');
		$query = $this->db->get('data_alumni');
		$num = $query->num_rows();

	}
	


    


}
//End of file data_param.php