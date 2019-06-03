<?php include("includes/header.php");?>
<div class="container register">
	<div class="row">
	<?php if($error):?>
		<?php foreach($error as $errors):?>
		<div class="col-md-8 col-md-offset-2">
			<?php echo $errors?>
			<?php endforeach;?>
			<?php else:?>
				<?php  echo $suc;?>
			<?php endif;?>
			<h2 class="text-center">Registration form*</h2>
			<form method="post" action="registration.php" >
				<div class="form-username text-center">
					<label for="username">Enter Your Username</label>
					<input type="text" name="username" class="form-control" id="username">
				</div>
				<div class="form-pw_one text-center">
					<label for="pw_one">Enter Your Password</label>
					<input type="password" name="pw_one" class="form-control" id="pw_one">
				</div>
				<div class="form-pw_two text-center">
					<label for="pw_two">Confirm password</label>
					<input type="password" name="pw_two" class="form-control" id="pw_two">
				</div>
				<div class="form-email text-center">
					<label for="email">Enter Your email</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>
				<input type="hidden" name="user" class="form-control" value="user">
				<button type="submit" name="submit" class="btn btn-primary btn-lg pull-right"><span>Submit</span></button>
			</form>
		</div>
	</div>
</div>

<?php include("includes/footer.php");?>