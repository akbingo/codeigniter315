<?php
class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array("form","url"));

        $this->load->library("form_validation");

        $data["title"]="Learning Form";

        $this->form_validation->set_rules("username","用户名","required");
        $this->form_validation->set_rules("password","密码","required",array("required"=>"You must provide a %s."));
        $this->form_validation->set_rules("passconf","密码确认","required");
        $this->form_validation->set_rules("email","邮箱","required");

        if ($this->form_validation->run()===FALSE)
        {
            $this->load->view("templates/header",$data);
            $this->load->view("form/myform",$data);
            $this->load->view("templates/footer",$data);
        }
        else
        {
            $this->load->view("templates/header",$data);
            $this->load->view("form/formsuccess",$data);
            $this->load->view("templates/footer",$data);
        }
    }
}