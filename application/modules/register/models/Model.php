<?php
class Model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }


    function cek_pass($email, $md5)
    {
        $this->db->where('email', $email);
        $this->db->or_where('password', $md5);
        return  $this->db->get("data_alumni")->num_rows();
    }
    function insert()
    {
        $email  =   $this->input->post("f[email]");
        $pass   =   $this->input->post("password");
        $md5    =   md5($pass);
        $cek    = $this->cek_pass($email, $md5);
        if ($cek) {
            $var["gagal"] = true;
            $var["info"] = "Silahkancari username / password lain.";
            return $var;
        }
        $form    =    $this->input->post("f");
        $this->db->set($form);
        $this->db->set("password", $md5);
        return $this->db->insert("data_alumni");
    }
}
