<?php require_once("core/init.php");
$posts =  new Post;

$template = new Template('template/add-post.php');
$page = !empty($_GET['page']) ? (int)$_GET['page']:1;
$per_page = 6;
$total_count = $posts->count_all();
$pagination = new Pagination($page, $per_page, $total_count);
$template->post = $posts->getallPost($per_page,$pagination->offset());

//Insert into to post table
$err = array();
if (isset($_POST['submit'])) {
	$data = array();
	$data['title'] = $_POST['title'];
	$data['body'] = $_POST['body'];
	$data['category'] = $_POST['category'];
	$data['author'] = $_POST['author'];
	$files = $_FILES['img'];
	$title = $_FILES['img']['name'];
	$data['image'] = $title;
	$image_temp_location = $_FILES["img"]["tmp_name"];
	$move = move_uploaded_file($image_temp_location, "images/$title");

	if (empty($data['title']) || empty($data['body']) || empty($data['category']) || empty($data['author']) ||empty($data['image'])) {
		
		$err['fill'] =$err["user"]="<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> All fields must be completed !</strong></div>";

	} else

if ($posts->add_post($data)) {
		header("Location:admin.php");

		} 
}

$template->error = $err;
echo $template;

?>



