<?php
/*function likesCounter($id){
	$db = new Database;
	$db->query("SELECT * FROM replies WHERE id"=.$id);
	$db->resultSet();
	return $db->rowCount();
}*/

function likesCounter($id){
	$db = new Database;
	$db->query('SELECT likes FROM replies WHERE id =:id');
	$db->bind(':id', $id);
	$rows = $db->resultSet();
	// Get count
	#return $db->rowCount();
	return $rows;	
}

function add_likes($likes){
	$db = new Database;
	$db->query("UPDATE replies SET likes = likes + 1 WHERE id =:likes");
	$db->bind(':likes', $likes);
	$db->execute();
	return true;
}

 function getCat($cat,$per_page,$offset){
		$db = new Database;
		$db->query("SELECT * FROM post WHERE category ='$cat'
				ORDER BY id DESC  LIMIT $per_page OFFSET $offset ");
		$results = $db->resultSet();
		return $results;
	}

function count_all_cat($cat){
		$db = new Database;
		$db->query("SELECT COUNT(*) FROM post WHERE 
			category ='$cat'");
		$row = $db->resultSet();
		return $row;
	}

function add_image($name,$files,$image_name,$image_temp_location){
	$db = new Database;
	$move = move_uploaded_file($image_temp_location, "img/$image_name");
	if (empty($name)||empty($image_name)) {
		$err ="<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> please select an image!</strong></div>";
	}else{

		$db->query("SELECT * FROM images WHERE name ='$name'");
		if($db->rowCount()>0){
			$err="<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <strong> This image already exist! </strong>
            </div>";	
		}
	}
}

?>																																		