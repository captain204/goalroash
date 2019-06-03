<?php include("core/init.php");
$users = new User;
$template = new Template('template/register-view.php');
$err ='';
$success ='';
if (isset($_POST['submit'])) {
	$data = array();
	$data['username'] = $_POST['username'];
	$data['pw_one'] = password_hash($_POST['pw_one'],PASSWORD_DEFAULT);
	$data['email'] = $_POST['email'];
	$data['user'] = $_POST['user'];

	$err = array();
	if (empty($data['username']) || empty($data['pw_one']) || empty($data['email'])|| empty($data['email'])|| empty($data['user'])){
		
		$err['fill'] = "<div class ='alert alert-danger'>
			  <button type ='buttom' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong> All fields must  be completed !</strong></div>";
	} else{

	$users->register_data($data);
	$success ='<div class="alert alert-success" id="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Registration successfull</strong> 
               </div>';
     if(isset($success)){
     		$_SESSION['new_user'] ='Registration successfull! Proceed to login';
            header("Location:login.php");
  	}

  }
}

$template->error = $err;
$template ->suc = $success;
echo $template;
?>