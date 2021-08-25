<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base_Controller.php');
class Load extends Base_Controller {

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

	public function index(){
		$this->load->helper('assets');
		$data['template'] = 'accueil.php';
		$this->load->view('template_accueil',$data);
		
	}

	public function ValidationLogin(){
		$this->load->helper('assets');

		$email = $this->input->post('loginAdmin');
		$mdp = $this->input->post('mdpAdmin');

		if($mdp =='' || $email =='' ){
			$data['template'] = 'accueilAdmin.php';
			$this->load->view('template',$data);
		}else{
			$data['template'] = 'loginAdmin.php';
			$this->load->view('template',$data);
		}
	}

	public function template($page,$data){
		
		$data['template'] = $page.'.php';
		$this->load->view('template',$data);
	}

	public function SaisieCaisse(){

		$this->load->model('Produit');
		$this->load->model('Achat');
		$caisse = $this->session->userdata('caisse');
		$data['caisse'] = $caisse;
		$data['liste_Produit'] = $this->Produit->get_All_Produit();
		$data['liste_Achat'] = $this->Achat->getAchat($caisse);
		$this->template('SaisieCaisse',$data);
	}

	public function ValidationCommande(){

		$this->load->model('Achat');
		$this->load->model('Produit');

		$idProduit = $this->input->post('Produit');
		$quantite = $this->input->post('quantite');
		$caisse = $this->session->userdata('caisse');

		$this->achat->insert_Achat($caisse,$idProduit,$quantite);

		$data['caisse'] = $caisse;
		$data['liste_Produit'] = $this->produit->get_All_Produit();
		$data['liste_Achat'] = $this->achat->getAchat($caisse);
		$this->template('saisie',$data);
	}
}