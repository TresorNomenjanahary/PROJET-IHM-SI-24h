<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Vente extends CI_Model{
	
	
	public function Produit_5_Meilleur_Vente()
	{
		$sql='SELECT SUM(Achat.quantite) as nombre,Achat.idStock as id  FROM Vente join Achat on Vente.idAchat=Achat.idAchat group by Achat.idAchat limit 5';
		$query = $this->db->query($sql);
		$vente = array();
		foreach ($query->result_array() as $key) {
			$vente[] = $key;
		}
		return $vente;
	}

/*	public function get_Vente_Caisse()
	{
		$sql = 'SELECT SUM(Achat.quantite) as nombre,Achat.idStock as  FROM Vente join Achat on Vente.idAchat=Achat.idAchat';
	}*/


	public function getProduit($idStock)
	{
		$sql = 'SELECT Produit.designation from Produit join Stock on Produit.idProduit = Stock.idProduit where Stock.idStock = %s';
		$query = $this->db->query($sql,$this->db->escape($idStock));
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
	public function get_All_Achat(){

		$sql = 'SELECT * FROM Vente';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}

	
}
?>