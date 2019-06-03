<?php require_once("core/init.php");
$posts = new Post;
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$data = array();
	$data['title'] = $_POST['title'];
	$data['body'] = $_POST['body'];
	$data['category'] = $_POST['category'];
	$data['author'] = $_POST['author'];


if ($posts->update_post($data,$id)) {
		header("Location:admin.php");
		} else{
   echo'<div class="danger"> "Post unable to add new post"<div>';
 }



}


?>
