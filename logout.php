<?php require_once("core/init.php");
$users = new User;

if (isset($_POST['logout'])) {
	
	logout();
}
