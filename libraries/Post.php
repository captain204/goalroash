<?php
class Post{

private $db;

public function __construct(){
	$this->db = new Database;
}

	public function getallpost($per_page,$offset){
			$this->db->query("SELECT * from post ORDER BY id DESC LIMIT $per_page OFFSET $offset");
			$results = $this->db->resultSet();
			return $results;
	  }
	 public function getpost($id){
	 		$this->db->query("SELECT * FROM post WHERE id=".$id);
	 		$results = $this->db->single();
	 		return $results;
	 }

	public function add_post($data){
		$this->db->query("INSERT INTO post(title,body,author,category,image)
						VALUES(:title, :body, :author, :category,:image)");
		$this->db->bind(':title', $data['title']);
		$this->db->bind(':body',  $data['body']);
		$this->db->bind(':author',$data['author']);
		$this->db->bind(':category',$data['category']);
		$this->db->bind(':image',$data['image']);
		$result = $this->db->execute();
		if ($result) {
			return true;
		}else{
			return false;
		}

	}

	public function update_post($data,$id){
		$this->db->query("UPDATE post SET title =:title, body =:body, category =:category,	author=:author WHERE id=".$id);
		$this->db->bind(':title', $data['title']);
		$this->db->bind(':body',  $data['body']);
		$this->db->bind(':category',$data['category']);
		$this->db->bind(':author',$data['author']);	
		$result = $this->db->execute();
		if ($result) {
			return true;
		}else{
			return false;
		}
	}


	public function deletePost($id){
		$this->db->query("DELETE FROM post WHERE id=".$id);
		$results = $this->db->execute();
		if ($results) {	
			header("Location:admin.php");
		}
	}

	public function editPost($id){
		$this->db->query("SELECT * FROM post WHERE id=".$id);
		$results = $this->db->resultSet();
		return $results;
	}

	public function count_all(){
		$this->db->query("SELECT COUNT(*) FROM post");
		$row = $this->db->resultSet();
		return $row;
	}

	
}
?>