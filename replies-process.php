<?php require_once("core/init.php");
$reply = new Reply;
$err = array();
$template = new Template('template/replies.php');
if (isset($_POST['submit'])) {
	$data = array();
	$data['id'] = $_POST['id'];
	$data['body'] =$_POST['body'];
	$data['user_id'] = $_POST['user_id'];

	if (empty($data['body'])||empty($data['user_id'])) {
		$err['fill'] = "<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> All fields must  be completed !</strong></div>";
	}

	if ($reply->add_reply($data)) {
		header("Location:post.php?id=".$data['id']);
		#echo "post added successfully";
	} else{

		$err['fail'] = "<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> All fields must  be completed !</strong></div>";
	}

}
$template->error = $err;
echo $template;
?>