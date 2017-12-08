<?php 
//if(!defined("BASEPATH")) exit("No direct script access allowed");

class Signin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }
    
    public function index() {
        $this->load->view("users/login");
    }

    public function check() {
        $this->load->model("users_model");

        $signame=$this->input->post("signame");
        $check_user=$this->users_model->check_user($signame);
        $signpw=md5($this->input->post("signpw")."黑川纱里奈");
        if ($check_user) {
            if ($check_user->passwd==$signpw) {
                header("Location: http://localhost:48/news/create");
                //把用户ID存入数组
                $arr=array(
                    "s_id"=>$check_user->id,
                    "username"=>$check_user->username
                );
                //设置session
                $this->session->set_userdata($arr);
            }
            else {
                echo "密码错误";
            }
        }
        else {
           echo "用户名错误"; 
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("s_id");
        header("Location: http://localhost/");
    }
}
