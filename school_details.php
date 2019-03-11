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
	<title>School Details</title>

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
	<h1>SCHOOL DETAILS: </h1>
	<p>Kindly provide your school's information: </p>

	<form action=" " method="post">

		<div class="form-group">
			<label for="Project_title" >County: </label><br>
			<select class="form-control" id="county" required name="county">
				<option value=" "> </option>
				<option value="Baringo">Baringo</option>
				<option value="Bungoma">Bungoma</option>
				<option value="Busia">Busia</option>
				<option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
				<option value="Embu">Embu</option>
				<option value="Garissa">Garrisa</option>
				<option value="Homa Bay">Homa Bay</option>
				<option value="Isiolo">Isiolo</option>
				<option value="Kajiado">Kajiado</option>
				<option value="Kakamega">Kakamega</option>
				<option value="Kericho">Kericho</option>
				<option value="Kiambu">Kiambu</option>
				<option value="Kilifi">Kilifi</option>
				<option value="Kirinyaga">Kirinyaga</option>
				<option value="Kisii">Kisii</option>
				<option value="Kisumu">Kisumu</option>
				<option value="Kitui">Kitui</option>
				<option value="Kwale">Kwale</option>
				<option value="Laikipia">Laikipia</option>
				<option value="Lamu">Lamu</option>
				<option value="Machakos">Machakos</option>
				<option value="Makueni">Makueni</option>
				<option value="Mandera">Mandera</option>
				<option value="Marsabit">Mandera</option>
				<option value="Meru">Meru</option>
				<option value="Migori">Migori</option>
				<option value="Mombasa">Mombasa</option>
				<option value="Murang'a">Murang'a</option>
				<option value="Nairobi">Nairobi</option>
				<option value="Nakuru">Nakuru</option>
				<option value="Nandi">Nandi</option>
				<option value="Narok">Narok</option>
				<option value="Nyamira">Nyamira</option>
				<option value="Nyandarua">Nyandarua</option>
				<option value="Nyeri">Nyeri</option>
				<option value="Samburu">Samburu</option>
				<option value="Taita Taveta">Taita Taveta</option>
				<option value="Tana River">Tana River</option>
				<option value="Tharaka Nithi">Tharaka Nithi</option>
				<option value="Trans Nzoia">Trans Nzoia</option>
				<option value="Turkana">Turkana</option>
				<option value="Uasin Gishu">Uasin Gishu</option>
				<option value="Vihiga">Vihiga</option>
				<option value="Wajir">Wajir</option>
				<option value="West Pokot">West Pokot</option>
				<option value=""></option>
			</select><br>
		</div>
		<div class="form-group">
			<label for="Name_of_school" >Name of school: </label><br>
			<input class="form-control" required name="Name_of_school" id="Name_of_school" type="text"><br>
		</div>
		<div class="form-group">
			<label for="principalName" >Principal's/Headteacher's Name(First, Middle, Surname)<br>For example: Mary Awiti Odhiambo: </label>
			<input class="form-control" required name="principalName" id="principalName" type="text">
		</div>
		<div class="form-group">
			<label for="principalPhone" >Principal's Phone Number<br>For Example: 07** *** ***: </label>
			<input class="form-control" required name="principalPhone" id="principalPhone" type="text">
		</div>
		<div class="form-group">
			<label for="teacherinchargeName" >Teacher In Charge's Name: </label>
			<input class="form-control" required name="teacherinchargeName" id="teacherinchargeName" type="text">
		</div>
		<div class="form-group">
			<label for="teacherinchargePhone" >Teacher In Charge's Mobile Number: </label>
			<input class="form-control" required name="teacherinchargePhone" id="teacherinchargePhone" type="text">
		</div>
		<div class="form-group">
			<label for="teacherinchargealternativePhone" >Teacher In Charge's Alternative Mobile Number: </label>
			<input class="form-control" required name="teacherinchargealternativePhone" id="teacherinchargealternativePhone" type="text">
		</div>
		<div class="form-group">
			<label for="teacherinchargeEmail" >Teacher In Charge's Email: </label>
			<input class="form-control" required name="teacherinchargeEmail" id="teacherinchargeEmail" type="email">
		</div>
		<div class="text-center">
			<button class="btn btn-primary" name="school_details">Save</button>
		</div>
</div>

</form>

</body>
</html>
