<?php
/*function pagination($id, $name,){
	$db = new Database;
	$per_page = 10;
	$pages_query = $db->query("SELECT count('$id') FROM $name");
	$pages = ceil($db->single($pages_query, 0)/ $per_page);
	$page = (isset($_GET['page']))? int()$_GET['page']:1;
	$db_name = $name;
	$start = ($page-1) * $per_page
	function getAll($db_name, $start, $per_page){
		$db->query("SELECT * FROM $name Limit $start, $per_page");
		$results = $db->resultset();
		return $results;
	}

}*/

function login($username,$password){
		$db = new Database;
		$db->query("SELECT * FROM user WHERE 
							username ='$username' AND
							password ='$password'");
			$row = $db->resultSet();
			return $row;
	}

function logout(){
		unset($_SESSION['user']);
		unset($_SESSION['new_user']);
		unset($_SESSION['id']);
		header("Location:index.php");
	}


	function fill($data){
		if (empty($data)) {
			return false;
		}
	}

?>