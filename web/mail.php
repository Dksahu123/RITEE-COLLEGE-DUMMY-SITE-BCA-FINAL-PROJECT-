


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("header.php");
include("sidebar.php");
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");

if(isset($_POST['submit']))
{
    $sn=$_POST['sname'];
   $fn=$_POST['fname'];
    $cl=$_POST['class'];
    $mob=$_POST['mobile'];
    
    $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];

    move_uploaded_file($tempname, "dataimg/$imagename");

    $rs=mysqli_query($con,"INSERT INTO addstudent set studentname='$sn',fathername='$fn',class='$cl',mobile='$mob',image='$imagename'");
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
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Grids :: w3layouts</title>
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

<!--header end-->
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class=" wrapper">
        <div class="agile-grid">
        <u><h2 class="w3ls_head" style="color:red;">CHANGE YOUR SITE IMAGES</h2></u>
            <div class="row">
                <div class="col-lg-12">
                 <p class="hd-title">CHANGE IMAGE</p>
               </div>
                 <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">

                          
                            <form class="form-group" action="" method="POST" enctype="multipart/form-data"  >

                               

                                IMAGE:<br>

                                <input type="file" name="image"  class="form-control"><br>

                             <center>   <input type="submit" name="submit" value="UPLOAD" class="btn btn-success" style="width:100px;height:35px; border-radius:10px;"></center>
                    

               
</form>
                </div>
                    </section>
                </div>

                
                    



                </div>
            
            
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
