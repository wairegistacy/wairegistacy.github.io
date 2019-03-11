<?php
/**
* Created by PhpStorm.
* User: Stacy Wairegi
* Date: 06/03/2019
* Time: 14:29
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Project Details</title>

	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<!--	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
	<!--	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
	<style>
		h1{
			color: blue;
			text-align: center;
			border-bottom: black;
		}

	</style>

</head>
<body>
<?php if(isset($_SESSION['success'])) { ?>

	<div class="alert alert-danger"> <?php echo $_SESSION['success']; ?></div>
	<?php
}
?>
<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<div class="col-lg-8 col-lg-offset-2">
	<h1>PROJECT DETAILS: </h1>
	<p>Please fill in the following details: </p>

	<form action=" " method="post">

		<div class="form-group">
			<label for="category" >Category of the Project: </label><br>
			<select class="form-control" id="county" required name="county">
				<option value=" "> </option>
				<option value="Chemical, physical and Mathematical sciences">Chemical, physical and Mathematical sciences</option>
				<option value="Social and Behavioral sciences">Social and Behavioral sciences</option>
				<option value="Biological and Ecological Sciences">Biological and Ecological Sciences</option>
				<option value="Technology">Technology</option>
			</select>
		</div>
		<div class="form-group">
			<label for="level" >Level: </label><br>
			<select class="form-control" id="level" required name="level">
				<option value=" "> </option>
				<option value="Junior(Form 1 and Form 2)">Junior(Form 1 and Form 2)</option>
				<option value="Senior (Form 3 and Form 4)">Senior (Form 3 and Form 4)</option>
			</select>
		</div>
		<div class="form-group">
			<label for="Project_title" >Project Title: </label><br>
			<input class="form-control" required name="Project_title" id="Project_title" type="text"><br>
		</div>
		<div class="form-group">
			<label for="Name_of_school" >Name of school: </label><br>
			<input class="form-control" required name="Name_of_school" id="Name_of_school" type="text"><br>
		</div>
		<div class="form-group">
			<label for="Student_name" >Student Names: </label>
			<input class="form-control" required name="Student_name" id="Student_name" type="text">
			<input class="form-control" required name="Student_name" id="Student_name" type="text">
		</div>
			<div class="form-group">
				<label for="Introduction" >Introduction: </label>
				<textarea required name="Introduction" rows="20" cols="150" placeholder="Write your Introduction here"></textarea>
			</div>
			<div class="form-group">
				<label for="Method" >Method: </label>
				<textarea required name="Method" rows="20" cols="150" placeholder="Write your method here"></textarea>
			</div>
		<div class="form-group">
			<label for="Results" >Results: </label>
			<textarea required name="Results" rows="20" cols="150" placeholder="Write your results here"></textarea>
		</div>
		<div class="form-group">
			<label for="Conclusion" >Conclusion: </label>
			<textarea required name="Conclusion" rows="20" cols="150" placeholder="Write your conclusion here"></textarea>
		</div>
		<div class="form-group">
			<label for="Referees" >References: </label>
			<textarea required name="Referees" rows="20" cols="150" placeholder="Write your references here"></textarea>
		</div>
		<div class="form-group">
			<label for="Acknowledge" >Acknowledgments: </label>
			<textarea required name="Acknowledge" rows="20" cols="150" placeholder="Write your acknowledgments here"></textarea>
		</div>
			<div class="text-center">
				<button class="btn btn-primary" name="project_details">Save</button>
			</div>
		</div>

	</form>


</body>
</html>
