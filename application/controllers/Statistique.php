<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends  CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Load
	 *	- or -
	 * 		http://example.com/index.php/Load/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Load/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();

	}

	
	public function template($page,$data){
		
		$data['template'] = $page.'.php';
		$this->load->helper('assets');
		$this->load->view('template',$data);
	}
	

	public function meilleurVente(){

		$this->load->model('vente');
		$data['vente'] = $this->vente->Produit_5_Meilleur_Vente();
		$this->template('meilleurVente',$data);
	}

	

}