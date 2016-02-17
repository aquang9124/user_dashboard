<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New User</title>
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
	.inline-h {
		display: inline-block;
		width: 60%;
		margin-top: 0;
	}
	.adder {
		float: right;
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
				<li class="active"><a href="dash_home">Dashboard</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="profile">Profile</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="log_off"><span class="glyphicon glyphicon-off"></span> Log Off</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<h1>Edit profile</h1>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<form action="edit_info" method="post" role="form">
					<fieldset>
						<legend>Edit Information</legend>
						<div class="form-group">
							<label for="e-mail">Email Address</label>
							<input type="text" name="email" id="e-mail" placeholder="email">
						</div>
						<div class="form-group">
							<label for="fname">First Name</label>
							<input type="text" name="first_name" id="fname" placeholder="first_name">
						</div>
						<div class="form-group">
							<label for="lname">Last Name</label>
							<input type="text" name="last_name" id="lname" placeholder="last_name">
						</div>
						<button class="btn btn-success">Save</button>
					</fieldset>
				</form>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<form action="edit_password" method="post" role="form">
					<fieldset>
						<legend>Change Password</legend>
						<div class="form-group">
							<label for="pass">Password</label>
							<input type="password" name="password" id="pass">
						</div>
						<div class="form-group">
							<label for="passcon">Confirm Password</label>
							<input type="password" name="passconf" id="passcon">
						</div>
						<button class="btn btn-success">Update Password</button>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<form action="edit_description" method="post" role="form">
					<fieldset>
						<legend>Edit Description</legend>
						<textarea class="form-control" name="description"></textarea>
						<button class="btn btn-success">Save</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>