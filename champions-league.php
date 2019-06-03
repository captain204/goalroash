<?php require_once("core/init.php");
#$post = new Categories;
$cat ='champions league';
$template = new Template('template/category-view.php');
#$template->posts = $post->getCat();
$page = !empty($_GET['page']) ? (int)$_GET['page']:1;
$per_page = 10;
$total_count =count_all_cat($cat);
$pagination = new Pagination($page, $per_page, $total_count);

$template->post = getCat($cat,$per_page,$pagination->offset());

$template->total = $pagination->total_pages();
$template->next_pages = $pagination->has_next_page();
$template->previous = $pagination->previous_page();
$template->next= $pagination->next_page();

echo $template;

?>