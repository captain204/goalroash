<!DOCTYPE html>
<html>
<head>
	<title>Goalrush</title>
	<link href="<?php echo BASE_URL;?>template/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>template/css/goalrush.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>template/css/fontawesome.min.css" rel="stylesheet">
	<script src="<?php echo BASE_URL;?>template/js/jquery.js"></script>
	<script src="<?php echo BASE_URL;?>template/js/bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL;?>template/js/ckeditor/ckeditor.js"></script>
		
</head>
<body>
	<section class="head-section" style="background:url(images/bg.jpg);">
	  <nav class="navbar navbar-inverse" style="background:url(../images/bg.jpg);">
	  		<div class="container">
	  			<div class="navbar navbar-header">
	  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
	  				<a href="index.php" class="navbar navbar-brand">Goalrush</a>
	  			</div>
	  			<div class="nav navbar-nav form-inline navbar-right">
	  					<div class="input-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
							<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
	  			</div>
			  	<div class="collapse navbar-collapse">	
			  		<ul class="nav navbar-nav navbar-right">
			  		<?php if(!isset($_SESSION['user'])):?>
			  			<li><a href="registration.php">Join</a></li>
			  			<li><a href="login.php">login</a></li>
			  		<?php else:?>
			  			<li><form method="post" action="logout.php">
			  			<button type="submit" name="logout" class="btn btn-primary">Logout</button>
			  			</form><li>
			  		<?php endif;?>
			  			<li><a href="#">livescores</a></li>
			  		</ul>
			  	</div>
	  		</div>
	  </nav>
	  <header>
	  			<?php if (isset($_SESSION['user'])):?>
	  				<h4 class="text-center"><?php echo $_SESSION['user'];?></h4>
	  			<?php endif;?>
	  			<h1 class="text-center">Goalrush</h1>
	  			<div class="col-md-5 col-md-offset-4 categories">
		  			<ul class="nav navbar-nav">
		  				<li><a href="nigeria.php">Nigeria</a></li>
		  				<li><a href="epl.php">Epl</a></li>
		  				<li><a href="laliga.php">Laliga</a></li>
		  				<li><a href="seria-a.php">Seria A</a></li>
		  				<li><a href="others.php">Others</a></li>
		  				<li><a href="champions-league.php">Champions league</a></li>
		  			</ul>
	  			</div>
	  </header>
	  </section>
	  <hr>