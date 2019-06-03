<?php
class Reply{

	private $db;

	public function __construct(){

		$this->db = new Database;
	}

	public function getReplies($id,$per_page,$offset){
		$this->db->query("SELECT replies.*, user.username FROM replies
						INNER JOIN user
						ON replies.user_id = user.id
						INNER JOIN post
						ON replies.post_id = post.id
						WHERE post.id='$id' LIMIT $per_page OFFSET $offset");
		$results = $this->db->resultSet();
		return $results;

	}

	Public function add_reply($data){

		$this->db->query("INSERT into replies (post_id,body,user_id)VALUES(:id,:body,:user_id)");
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':body', $data['body']);
		$this->db->bind(':user_id', $data['user_id']);
		$results=$this->db->execute();
		if ($results) {
			
			return true;
		} else{
			return false;
		}
	}

	public function replyCount($id){
		$this->db->query("SELECT * FROM replies WHERE post_id=".$id);
		$this->db->resultSet();
		return $this->db->rowCount();
	}

	public function count_all(){
		$this->db->query("SELECT COUNT(*) FROM replies");
		$row = $this->db->execute();
		return $row;
	}
}
?>