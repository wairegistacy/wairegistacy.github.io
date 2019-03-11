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
	<title>Student Details</title>

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
	<h1>STUDENT DETAILS: </h1>
	<p>Please fill in the following details for the first student participating: </p>

	<form action=" " method="post">

		<div class="form-group">
			<label for="name" >Name: </label><br>
			<input class="form-control" required name="name" id="name" type="text"><br>
		</div>
		<div class="form-group">
			<label for="gender" >Gender: </label><br>
			<select class="form-control" id="gender" required name="gender">
				<option value=" "> </option>
				<option value="Female">Female</option>
				<option value="Male">Male</option>
			</select>
		</div>
		<div class="form-group">
			<label for="birthDate" >Date of Birth: </label><br>
			<input class="form-control" required name="birthDate" id="birthDate" type="date"><br>
		</div>
		<div class="form-group">
			<label for="phone" >Phone Number: </label><br>
			<input class="form-control" required name="phone" id="phone" type="text"><br>
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
		</div>

			<button class="btn btn-primary" name="firststudent_details">Save</button>
		</div>
</div>

</form>


</body>
</html>
