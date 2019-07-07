<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ($this->session->flashdata('success')) {
  echo '<script>
alert("'.$this->session->flashdata('success').'");
</script>';
}
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

	<div style="margin: 0 15px 15px 15px">
		<a href="<?php echo base_url()?>index.php/biodata/add" class="btn btn-success">Add</a>
	</div>
	<div id="body">
		<table class="table bordered hovered">
			<thead>
				<tr>
					<td>No</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Address</td>
					<td>Description</td>
					<td>Options</td>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no = 1;
			foreach($data as $bio):?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $bio->first_name;?></td>
					<td><?php echo $bio->last_name;?></td>
					<td><?php echo $bio->address;?></td>
					<td><?php echo $bio->description;?></td>
					<td>					
						<a class="btn btn-info" href="<?php echo base_url('index.php/biodata/edit/'.$bio->id.'')?>">Edit</a>

						<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url('index.php/biodata/del/'.$bio->id.'')?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>