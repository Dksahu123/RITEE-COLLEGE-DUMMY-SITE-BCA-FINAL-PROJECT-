<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <u> Search Details</u>
    </div>
    <div class="row " style="margin-top:15px;">
       <div class="col-sm-12">
         <div class="col-sm-4">
            <form action="" method="POST" enctype="multipart/form-data" class="form-group" style="width:300px;">

                <input type="text" name="search_value" placeholder="search here" class="form-control" required="">
                </div>
                <div class="col-sm-4">
                   <input type="submit" name="search" class="btn btn-primary" value="search">

                </div>
               




            </form>


         
          

       </div>


    </div>
 


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">student name</th>
      <th scope="col">father name</th>
      <th scope="col">class</th>
      <th scope="col">mobile</th>
      <th scope="col">image</th>

    </tr>
  </thead>
  <tbody>
    <?php
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");
$sno=1;

if(isset($_POST['search']))
{
  $sr=$_POST['search_value'];

  $rs=mysqli_query($con,"SELECT * FROM addstudent where CONCAT(studentname,class) like '%$sr%' ");

 
  if(mysqli_num_rows($rs) > 0)
  {
    while($row=mysqli_fetch_array($rs))
    {
      ?>
     <tr>
      
     <td> <?php echo $sno++;  ?></td>
     <td> <?php echo $row['studentname'];  ?></td>
     <td> <?php echo $row['fathername'];  ?></td>
     <td> <?php echo $row['class'];  ?></td>
     <td> <?php echo $row['mobile'];  ?></td>
       <td ><img src="dataimg/<?php echo $row["image"]; ?>" style='width:200px; height: 100px;' ></td>


      

    </tr>
   <?php
 }
  }
  else
  {
    echo "do not data found";
  }
}





?>
   </div>



      </div>




     </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </tbody>
</table>
  </body>
</html>
