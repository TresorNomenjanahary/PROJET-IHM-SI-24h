<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{
	
	public function get_All_Categorie(){
		$query = $this->db->query('SELECT * FROM Categorie');
		$categorie = array();
		foreach ($query->result_array() as $key) {
			$categorie[] = $key;
		}
		return $categorie;
	}

	public function Inserer_Categorie($categorie){
		$sql = "INSERT INTO Categorie VALUES (null,%s)";
		$sql = sprintf($sql,$this->db->escape($categorie));
		$this->db->query($sql);
	}

	
}
?>