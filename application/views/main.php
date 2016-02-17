<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.heading {
		border-bottom: 3px solid black;
	}
	.start_btn {
		box-shadow: 1px 2px 3px black;
	}
</style>
<body>
	<nav class="navbar heading">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Test App</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="home">Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="sign"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1>Welcome to the Test</h1>
				<p>We're going to build a cool application using a MVC framework! The application was built with the Village88 folks!</p>
				<a href="#"><button class="btn btn-info start_btn">Start</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4">
				<h1>Manage Users</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<h1>Leave Messages</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<h1>Edit User Information</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, ex.</p>
			</div>
		</div>
	</div>
</body>
</html>