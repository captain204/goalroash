<?php require_once("core/init.php");?>
<?php
$posts = new Post;
#$id = $_GET['id'];
$template = new Template('template/admin.php');
$page = !empty($_GET['page']) ? (int)$_GET['page']:1;
$per_page = 10;
$total_count = $posts->count_all();
$pagination = new Pagination($page, $per_page, $total_count);

$template->post = $posts->getallPost($per_page,$pagination->offset());

$template->total = $pagination->total_pages();
$template->next_pages = $pagination->has_next_page();
$template->previous = $pagination->previous_page();
$template->next= $pagination->next_page();

echo $template;
?>