<?php
class Users_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function create_user() {
        $passwd=md5($this->input->post("passconf")."黑川纱里奈");
        $data=array(
            "username"=>$this->input->post("username"),
            "passwd"=>$passwd,
            "email"=>$this->input->post("email")
        );

        return $this->db->insert("users",$data);
    }

    public function check_user($signame) {
        /*$this->db->where("email",$signame);
        $this->db->select("*");*/
        $query=$this->db->get_where("users",array("email"=>$signame));
        return $query->row();
    }
}