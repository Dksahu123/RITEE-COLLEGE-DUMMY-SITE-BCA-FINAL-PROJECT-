<?php
$hostname="localhost";
$user="root";
$pass="";

$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"ritdata");


if(isset($_POST['submit']))
{
	$un=$_POST['uname'];
	$pas=$_POST['pass'];

	$rs=mysqli_query($con,"SELECT * from adminlog where username='$un' and password='$pas' ");

	$count=mysqli_num_rows($rs);

	if($count>0)
	{
		header("location:http://localhost/ritee/web/index.php");
	}

	else
	{
		echo "<script> alert('something went wrong')</script>";
	}

}




?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin login</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<body style="background-color:lightblue;">
	<div class="container">
		<div class="row" style="margin-top:50px;">
			<div class="col-sm-8" >
				<img src="12.jpg" style="height:500px;width: 800px; object-fit: cover;">


				


			</div>
			<div class="col-sm-3" style="margin-left: 30px;">
	<div class="card">
<img src="2.jfif" class="card-img-top" style="width:400px;">

			<div class="card-body">

				<form class="form-group" action="" method="POST" style="width:400px;">

					<h2>Admin login</h2>

					USER NAME: <br>

					<input type="text" name="uname" class="form-control" placeholder="enter your name"><br>


					PASSWORD:
					<input type="password" name="pass" class="form-control" placeholder="enter your password"><br>

				<center>	<input type="submit" name="submit" class="btn btn-primary" value="Login" style="width:150px;height:50px; border-radius:20px;"></center>

					



				</form>


</div>
			 </div>

</div>
		</div>
		



	</div>

</body>
</html>