<?php require_once("core/init.php");

$posts = new post;
$replies = new Reply;
$id = $_GET['id'];
$template = new Template('template/replies.php');
$template->post = $posts->getpost($id);
echo $template;
?>