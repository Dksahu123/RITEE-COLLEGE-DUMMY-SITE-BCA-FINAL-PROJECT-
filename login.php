<?php
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");


if(isset($_POST['submit']))
{
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$em=$_POST['email'];
	$cr=$_POST['cource'];

	$rs=mysqli_query($con,"INSERT INTO enqdata set fname='$fn',lname='$ln',email='$em',cource='$cr'");

	if($rs)
	{
		echo("<script>alert('data has been submited')</script>");
	}
	else
	{
		echo("failed submited");
	}

}






?>

<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Form</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<form action="" method="POST">
	<div class="form">
	  <div class="tittle">Welcome</div>
		 <div class="subtitle"></div>

	<div class="input-container ic1 ">
		<input type="text" id="fname"
		 class="input" name="fname" placeholder="">
	<div class="cut"></div>
	<label for="fname" class="placeholder">First Name</label>
	
	</div>


	   <div class="input-container ic1 ">
		<input type="text" id="lname"
		 class="input" name="lname" placeholder="">
	<div class="cut"></div>
	<label for="lname" class="placeholder">Last Name</label>
	
	</div>

	<div class="input-container ic2 ">
		<input type="text" id="email"
		 class="input" name="email" placeholder="">
	<div class="cut cut-short"></div>
	<label for="email"  class="placeholder">Email</label>
	</div>



	<div class="input-container ic2 ">
		<input type="text" id="cource"
		 class="input" name="cource" placeholder="">
	<div class="cut cut-short"></div>
	<label for="cource" class="placeholder">Choose Course</label>
	</div>

	<button type="text" class="submit" name="submit">submit</button>
   
   </div>

</form>
</body>
</html>