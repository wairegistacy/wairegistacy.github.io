<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07/03/2019
 * Time: 21:40
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--	 The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
	<title>Project Details</title>

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
	<h2>PROJECT DETAILS</h2>
	<table class="data-table">

		<thead>
		<tr>
			<th>PROJECT TITLE</th>
			<th>NAME OF SCHOOL</th>
			<th>STUDENT NAME</th>
			<th>INTRODUCTION</th>
			<th>METHOD</th>
			<th>RESULTS</th>
			<th>CONCLUSION</th>
			<th>REFEREES</th>
			<th>ACKNOWLEDGE</th>
			<th>CATEGORY</th>
			<th>LEVEL</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($project_details as $post) {?>
			<tr>
				<td><?php echo $post->Project_title;?></td>
				<td><?php echo $post->Name_of_school;?></td>
				<td><?php echo $post->Student_name;?></td>
				<td><?php echo $post->Introduction;?></td>
				<td><?php echo $post->Method;?></td>
				<td><?php echo $post->Results;?></td>
				<td><?php echo $post->Conclusion;?></td>
				<td><?php echo $post->Referees;?></td>
				<td><?php echo $post->Acknowledge;?></td>
				<td><?php echo $post->category;?></td>
				<td><?php echo $post->level;?></td>
				<td><?php echo anchor("home/edit/($post->Project_id)", 'Update', ['class'=>'btn btn-success']); ?></td>
				<td><?php echo anchor("home/delete", 'Delete', ['class'=>'btn btn-success']); ?></td>

			</tr>

		<?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>

