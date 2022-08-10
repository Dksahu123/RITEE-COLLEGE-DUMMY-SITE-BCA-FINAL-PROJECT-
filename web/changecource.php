<?php
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");
if(isset($_POST['submit']))
{
   $head=$_POST['chead'];
   $par=$_POST['cpara'];
    $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];

    move_uploaded_file($tempname, "courceimg/$imagename");

    $rs=mysqli_query($con,"INSERT INTO chcource set heading='$head',paragraph='$par',image='$imagename'");
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
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php

include('header.php');


    ?>

<!--header end-->
<!--sidebar start-->
<?php

include("sidebar.php");

?>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    <u> Change our cources</u>
    </div>
    <div class="row">
       <div class="col-sm-12">
          <form class="form-group" action="" method="POST" enctype="multipart/form-data">
             change image:
             <input type="file" name="image" class="form-control"><br>

             change heading:
             <input type="text" name="chead" class="form-control"><br>

             change paragraph:
             <input type="text" name="cpara" class="form-control"><br>
            <center> <input type="submit" name="submit" class="btn btn-primary" style="width:150px;height:50px; border-radius: 20px;">
               <button class="btn btn-default"><a href="showtable.php"> SHOW CHANGES</a></button>


            </center>

          </form>



       </div>

    </div>
