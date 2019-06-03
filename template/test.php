<!DOCTYPE html>
<html>
<head>
	<title>My bootstrap blog</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/blog-bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<section class="head-section" >
		<nav class="navbar navbar-custom">
			<div class="container">
				<div class="navbar-header">
					<a href="#index.php" class="navbar navbar-brand">Blog</a>
				</div>
				<div class="nav navbar-nav form-inline navbar-right">
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li id="hover"><a href="#">Home</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">contact us</a></li>
					<li><a href="#post.php">Posts</a></li>
				</ul>
			</div>
		</nav>
		<header>
			<div class="text-center">
				<h1 class="text-center">View blog</h1>
				<div class="lead">Best blog in the world</div>
			</div>
		</header>
		</section>
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div id="post">
					<h1><a href="#"> Its not always an easy win for the best teams</a></h1>
					<p class="lead">The common perception about winning sides is that they always win effortlessly.</p>
					<p>7-9-2018|Editor in chief</p>
				</div>
				<div class="text-right">
					<button class="btn btn-primary">Older post<span class="glyphicon glyphicon-chevron-right"></span></button>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<hr>
			<div class="text-center">
				<ul class="nav navbar-nav nav-bottom">
					<li><a href="#">Home</a></li>
					<li><a href="#">news</a></li>
					<li><a href="#">services</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Socials</a></li>
				</ul>
			</div>
		</div>

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form method="post" action="login.php" class="col-md-8 col-md-offset-1">
				<div class="form-group text-center">
					<input type="text" name="username" class="form-control" id="username" placeholder="username">
				</div>
				<div class="form-group text-center">
					<input type="password" name="password" class="form-control" id="password" placeholder="Password">				
				</div>
				<a href="password.php">forgot password</a>
				<div class="form-group">
				<button type="submit" name="login" class="btn btn-primary btn-lg pull-right"><span>Login</span></button>
				</div>
			</form>
		</div>
	</div>





		
</body>
</html>
