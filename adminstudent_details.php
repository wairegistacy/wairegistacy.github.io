<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/03/2019
 * Time: 09:46
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	 The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
	<title>Student Details</title>

<!--	 Bootstrap-->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			background-image: url("background.jpg");
			font-size: 15px;
			color: #343d44;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			background-color: beige;
		}

		h2 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 34px;
			font-family: "Agency FB";
			color: #5a0099;
		}

		table td {
			transition: all .5s;

		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: white;
			color: black;
			border-color: beige !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.user{
			margin: auto;
		}
	</style>
</head>
<body>
<div class="my_tables" style="background-color: beige">
	<h2>STUDENT DETAILS</h2>
	<table class="data-table">

		<thead>
	<tr>
		<th>NAME</th>
		<th>GENDER</th>
		<th>DATE OF BIRTH</th>
		<th>PHONE</th>
		<th>CLASS</th>
	</tr>
		</thead>
		<tbody>
	<?php foreach($student_details as $post) {?>
		<tr>
			<td><?php echo $post->name;?></td>
			<td><?php echo $post->gender;?></td>
			<td><?php echo $post->birthDate;?></td>
			<td><?php echo $post->phone;?></td>
			<td><?php echo $post->class;?></td>
			<td><a href="<?php echo base_url()?>main/update/data<?php echo $post->Id;?>" class="btn btn-primary" name="student_update_data"></a> Edit </td>
			<td><a href="#"  class="student_delete_data" id="<?php echo $post->Id; ?>"></a> Delete </td>
		</tr>

	<?php } ?>

		<div class="form-group">
			<div class="form-group">
			<label for="name" >Name: </label><br>
			<input class="form-control" required name="name" id="name" type="text"><br>
		<span class="text-danger"><?php echo form_error("name");?></span>
		</div>
	<div class="form-group">
		<label for="gender" >Gender: </label><br>
		<select class="form-control" id="gender" required name="gender">
			<option value=" "> </option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
		</select>
		<span class="text-danger"><?php echo form_error("gender");?></span>
	</div>
	<div class="form-group">
		<label for="birthDate" >Date of Birth: </label><br>
		<input class="form-control" required name="birthDate" id="birthDate" type="date"><br>
		<span class="text-danger"><?php echo form_error("birthDate");?></span>
	</div>
	<div class="form-group">
		<label for="phone" >Phone Number: </label><br>
		<input class="form-control" required name="phone" id="phone" type="text"><br>
		<span class="text-danger"><?php echo form_error("phone");?></span>
	</div>
	<div class="form-group">
		<label for="class" >Class: </label><br>
		<select class="form-control" id="class" required name="class">
			<option value=" "> </option>
			<option value="Form 1">Form 1 </option>
			<option value="Form 2">Form 2</option>
			<option value="Form 3">Form 3</option>
			<option value="Form 4">Form 4</option>
			<option value="Form 5">Form 5</option>
			<option value="Form 6">Form 6</option>
		</select>
		<span class="text-danger"><?php echo form_error("class");?></span>

	</div>

	<button class="btn btn-primary" name="firststudent_details">Save</button>

		</div>

		</tbody>
</table>
</div>
</body>
</html>
