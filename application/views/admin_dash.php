<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
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
	.form-btns {
		display: inline-block;
	}
</style>
<body>
	<nav class="navbar heading">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Test App</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="/dash_home">Dashboard</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="/profile/<?= $this->session->userdata('user_id') ?>">Profile</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/log_off"><span class="glyphicon glyphicon-off"></span> Log Off</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 class="inline-h">Manage users</h1>
				<a href="new"><button class="adder btn btn-info">Add new</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Created At</th>
							<th>User Level</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					if (isset($user_info)) {
						foreach($user_info as $user) { ?>
						<tr>
							<td><?= $user['id'] ?></td>
							<td><a href="/profile/<?= $user['id'] ?>"><?= $user['first_name'] . ' ' . $user['last_name'] ?></a></td>
							<td><?= $user['email'] ?></td>
							<td><?= $user['created_at'] ?></td>
							<td>
							<?php
								if ($user['admin'] === '1') {
									echo "admin";
								}
								else {
									echo "user";
								}
							?>
							</td>
							<td>
								<form class="form-btns" action="edit" method="post" role="form">
									<button type="submit" name="edit_btn" class="btn btn-info" value="<?= $user['id'] ?>">Edit</button>
								</form>
								<form class="form-btns" action="remove" method="post" role="form">
									<button type="submit" name="remove_btn" class="btn btn-danger" value="<?= $user['id'] ?>">Remove</button>
								</form>
							</td>
						</tr>
			<?php 		} ?>
			<?php   } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>