<?php
class Categories{

	private $db;

	public function __construct(){

		$this->db = new Database;
	}

	public function getCat(){
		$this->db->query("SELECT post.*, category.id, category.name FROM post
						 INNER JOIN category
						 ON post.category = category.id
						 WHERE category.name='Epl'");
		$results = $this->db->resultSet();
		return $results;
	}


}

?>