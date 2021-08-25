<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
        $res=$this->data_model->estLoger($data);
        if($res){
            $this->session->set_userdata('id'.$data['loginUser']);
            echo base_url()."TabDeBord/";
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