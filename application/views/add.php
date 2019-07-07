<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
</head>
<body>
<div id="container">
	<h1>CRUD</h1>

	<div id="body">
		<form method="post" action="<?php echo base_url()?>index.php/biodata/addbio">
		<div class="form-group">
			<div class="col-md-5">
				<label>First Name :</label>
				<input class="form-control" type="text" name="first" placeholder="First Name" required>
			</div>
			<div class="col-sm-5">
				<label>Last Name :</label>
				<input class="form-control" type="text" name="last" placeholder="Last Name" required>
			</div>
			<div class="col-sm-5">
				<label>Address :</label>
				<input class="form-control" type="text" name="address" placeholder="Address" required>
			</div>
			<div class="col-sm-5">
				<label>Description :</label>
				<textarea class="form-control" name="description" required placeholder="Description"></textarea>
			</div>
			<div class="col-sm-5" style="margin-top: 15px ">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</div>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>