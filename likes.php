<?php require_once("core/init.php");
if (isset($_POST['submit'])) {
	$likes = $_POST['like_id'];
	$post =$_POST['post_id'];
	add_likes($likes);
	header("Location:post.php?id=".$post);
}
?>