<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonctionnalite extends  CI_Controller {

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
		$this->template('insertion',$data);
	}

	public function Inserer_Produit(){

		$this->load->model('produit');
		$this->load->model('categorie');

		$idCategorie = $this->input->post('categorie');
		$quantite = $this->input->post('quantite');
		$code = $this->input->post('code');
		$prix = $this->input->post('prix');
		$designation = $this->input->post('designation');

		$this->produit->insert_Produit($idCategorie,$code,$quantite,$prix,$designation);

		$data['liste_categorie'] = $this->categorie->get_All_Categorie();
		$this->template('insertion',$data);
	}

	public function Manipulation(){

		$this->load->model('categorie');
		$this->load->model('produit');

		$data['liste_produit'] = $this->produit->get_All_Produit();
		$this->template('manipulation',$data);
	}	

	public function Supprimer_Produit($idProduit){

		$this->load->model('produit');

		$this->produit->delete_Produit($idProduit);

		$data['liste_produit'] = $this->produit->get_All_Produit();
		$this->template('manipulation',$data);
	}

	public function Modifier_Produit($idProduit){

		$this->load->model('produit');

		$this->produit->modifier_Produit($idProduit);

		$data['liste_produit'] = $this->produit->get_All_Produit();
		$this->template('modifier',$data);
	}

	public function Rechercher(){

		$this->template('recherche',null);
	}	

	public function Rechercher_Produit(){
		$this->load->model('produit');			

		$recherche = $this->input->post('recherche');

		$data['produit'] = $this->produit->recherche_Produit($recherche);
		$this->template('resultat',$data);

	}

}