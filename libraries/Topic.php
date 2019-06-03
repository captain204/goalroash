<?php
class Topic{

private $db;

public function __construct(){
	$this->db = new Database;
}

	public function getallpost(){
			$this->db->query("SELECT * from post");
			$results = $this->db->resultSet();
			return $results;
	  }
	 public function getpost($id){
	 		$this->db->query("SELECT * FROM post WHERE id=".$id);
	 		$results = $this->db->resultSet();
	 }

}
?>