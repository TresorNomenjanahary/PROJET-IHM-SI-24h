<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Produit extends CI_Model{
	
	public function get_All_Produit(){

		$sql = 'SELECT * FROM Produit';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getProduitLegume(){

		$sql = 'SELECT * FROM Produit WHERE idCategorie=3';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getProduitdivers(){

		$sql = 'SELECT * FROM Produit WHERE idCategorie=1';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	public function getProduitBoisson(){

		$sql = 'SELECT * FROM Produit WHERE idCategorie=2';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>