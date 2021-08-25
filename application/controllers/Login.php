<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base_Controller.php');

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('data_model');
    }

    public function index(){
        $this->load->view('loginAdmin');
    }

    public function validationLogin(){
        $data['loginUser']=htmlspecialchars($_POST['loginAdmin']);
        $date['password']=htmlspecialchars($_POST['mdpAdmin']);
        $res=$this->data_model->islogin($data);
        if($res){
            $this->session->set_userdata('id'.$data['loginUser']);
            echo base_url()."/";
        }else{
            echo 0;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        header('location:'.base_url()."loginAdmin/".$this->index());
    } 
}

?>