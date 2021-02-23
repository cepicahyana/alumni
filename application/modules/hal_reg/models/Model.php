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
	function set(){
		$val = $this->input->post("sts");
		$this->db->set("val",$val);
		$this->db->where("id",3);
		return $this->db->update("pengaturan");
	}
	
}
 