<?php include("includes/header.php");?>
<?php if(isset($_SESSION['new_user'])):?>
<h5 class="well text-center"><?php echo $_SESSION['new_user'];?><h5>
<?php endif;?>
<div class="container login">
	<img src="template/images/avatar-winner-soccer-ball-sport-260nw-782965588.jpg">
	<form method="post" action="login.php">
		<div class="form-input-one">
			 <input type="text" name="username" placeholder="Enter username">
		</div>
		<?php if($error):?>
		<?php foreach($error as $errors):?>
		<?php echo $errors;?>
		<?php endforeach;?>
		<?php endif;?>
		<div class="form-input-two">
			 <input type="password" name="password" placeholder="password">
		</div>
		<button type="submit" name="submit" class="btn btn-login">Login</button>
		<p><a href="password.php">Forgot password</a></p>
	</form>	
</div>
<?php include("includes/footer.php");?>