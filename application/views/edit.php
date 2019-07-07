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
		<?php foreach($data as $bio):?>
		<form method="post" action="<?php echo base_url('index.php/biodata/editbio/'.$bio->id.'')?>">
		<div class="form-group">
			<div class="col-md-5">
				<label>First Name :</label>
				<input class="form-control" type="text" name="first" placeholder="First Name" required value="<?php echo $bio->first_name;?>">
			</div>
			<div class="col-sm-5">
				<label>Last Name :</label>
				<input class="form-control" type="text" name="last" placeholder="Last Name" required value="<?php echo $bio->last_name;?>">
			</div>
			<div class="col-sm-5">
				<label>Address :</label>
				<input class="form-control" type="text" name="address" placeholder="Address" required value="<?php echo $bio->address;?>">
			</div>
			<div class="col-sm-5">
				<label>Description :</label>
				<textarea class="form-control" name="description" required><?php echo $bio->description;?></textarea>
			</div>
			<div class="col-sm-5" style="margin-top: 15px ">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</div>
		</form>
	<?php endforeach;?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>