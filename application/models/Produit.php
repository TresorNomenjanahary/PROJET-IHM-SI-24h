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

	public function insert_Produit($idCategorie,$codeProduit$prixUnitaire,$designation){
		$sql = "INSERT INTO Produit VALUES (null,%s,%s,%s,%s,%s)";
		$sql = sprintf($sql,$this->db->escape($idCategorie),$this->db->escape($codeProduit),$this->db->escape($prixUnitaire),$this->db->escape($designation));
		$this->db->query($sql);
	}

	public function delete_Produit($idProduit){
		$sql = "DELETE * from Produit where idProduit = %s";
		$sql = sprintf($sql,$this->db->escape($idProduit));
		$this->db->query($sql);
	}

	public function modifier_Produit($idProduit,$designation,$codeProduit,$prixUnitaire){
		$sql = "UPDATE Produit SET designation= %s , prixUnitaire = %s , codeProduit = %s  where idProduit = %s";
		$sql = sprintf($sql,$this->db->escape($designation),$this->db->escape($prixUnitaire),$this->db->escape($codeProduit),$this->db->escape($idProduit));
		$this->db->query($sql);
	}

	public function recherche_Produit($produit){
		
		$sql = 'SELECT * FROM Produit where designation like %%s% ';
		$query = $this->db->query($sql,$this->db->escape($produit));
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>