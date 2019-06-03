<?php require_once('core/init.php');?>
<?php
$posts = new Post;
$reply = new Reply;
$id = $_GET['id'];
#echo $id;
$template = new Template('template/post-view.php');
$page = !empty($_GET['page']) ? (int)$_GET['page']:1;
$per_page = 10;
$total_count = $reply->count_all();
$pagination = new pagination($page, $per_page, $total_count);

$template->post = $posts->getPost($id);
$template->postReply = $reply->getReplies($id,$per_page,$pagination->offset());
$template->repliesCount = $reply->replyCount($id);
$template->total = $pagination->total_pages();
$template->next_pages = $pagination->has_next_page();
$template->previous = $pagination->previous_page();
$template->next = $pagination->next_page();
echo $template;
?>

