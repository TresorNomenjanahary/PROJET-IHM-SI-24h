<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends  CI_Controller {

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
		$this->load->view('template',$data);
	}
	

	public function Insertion(){
		$this->load->model('categorie');

		$data['liste_categorie'] = $this->categorie->get_All_Categorie();
		
		$this->template('insertionCategorie',$data);
	}

	public function Inserer_Categorie(){

		$this->load->model('categorie');

		$designation = $this->input->post('designation');

		$this->produit->insert_Categorie($designation);

		$data['liste_categorie'] = $this->categorie->get_All_Categorie();
		$this->template('insertionCategorie',$data);
	}

	public function Supprimer_Categorie($idProduit){

		$this->load->model('categorie');

		$this->produit->delete_Categorie($idProduit);

		$data['liste_categorie'] = $this->categorie->get_All_Categorie();
		
		$this->template('insertionCategorie',$data);
	}

}