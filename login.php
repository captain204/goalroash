<?php include("core/init.php");
$users = new User;
$template = new Template("template/login-view.php");
$err = array();
if (isset($_POST['submit'])) {
	$err = array();
	$username = $_POST['username'];
	$password = $_POST['password'];
	#$num = 2;
	$user_id =  $users->getid($username);
	$_SESSION['id'] = $user_id->id;
	echo $_SESSION['id'];
	if(empty($username) || empty($password)){
		$err['fill'] = "<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> All fields must  be completed !</strong></div>";
	}else if ($users->user_exist($username,$password)) {
		$err["user"]="<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> Invalid user name and password !</strong></div>";

	} else{
	 	login($username,$password);
		$_SESSION['user'] = $username;	
		$user = $_SESSION['user'];
		header("Location:index.php");
		} 
}

#$template->id = $users->getid($username);
$template->error= $err;
echo $template;
?>