<?php
class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("users_model");
    }

    public function register() {
        $this->load->helper("form");
        $this->load->library("form_validation");

        $this->form_validation->set_rules("username","用户名","required");
        $this->form_validation->set_rules("password","密码","required");
        $this->form_validation->set_rules("passconf","确认密码","required");
        $this->form_validation->set_rules("email","邮箱","required");

        $data["title"]="欢迎注册";
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view("templates/header",$data);
            $this->load->view("users/register",$data);
            $this->load->view("templates/footer",$data);
        }
        else {
            $this->users_model->create_user();
            $this->load->view("users/regsuccess");
        }
    }
}