<?php require_once("core/init.php");
$posts = new Post;
$id = $_GET['id'];
$template = new Template("template/edit-view.php");
$page = !empty($_GET['page']) ? (int)$_GET['page']:1;
$per_page = 6;
$total_count = $posts->count_all();
$pagination = new Pagination($page, $per_page, $total_count);
$template->post = $posts->getallPost($per_page,$pagination->offset());
$template->post_edit = $posts->editPost($id);
echo $template;

