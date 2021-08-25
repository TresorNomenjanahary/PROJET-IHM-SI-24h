<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TabDeBord extends CI_Controller {

    public function goPage(){
        $this->load->view('accueil');
    }
}

?>