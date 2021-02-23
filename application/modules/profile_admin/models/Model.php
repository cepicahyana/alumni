<?php

class Model extends CI_Model  {


	public function __construct()
    {
        parent::__construct();
    }

    public function update()
    {
			$id		=	$this->input->post("id");
			$form	=	$this->input->post("f");


			$dok = "upload/dp";
			$file = $this->m_reff->upload_file("image",$dok,"foto_admin_".date('His'),"JPG,JPEG,PNG,jpg,jpeg,png",25000000,"");
			if($file["validasi"]!=false){
				$this->db->set("profileimg",$file["name"]);
			}


			$this->db->set($form);
      $this->db->where("id_admin", $id);
      return $this->db->update("admin");
	}

	public function get_by_id()
    {
			$id=$this->session->userdata("id_admin");
			$this->db->where("id_admin", $id);
			return $this->db->get("admin")->row();
    }


}
