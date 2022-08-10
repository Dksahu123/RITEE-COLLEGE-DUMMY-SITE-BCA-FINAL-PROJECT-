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


<!--sidebar end-->
<!--main content start-->


		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     CHANGES DETAILS

     <button style="margin-left:250px; " class="btn btn-danger"><a href="changecource.php" style="color:white;">BACK</a></button>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
              <th data-breakpoints="xs">ID</th>
              <th data-breakpoints="xs"> images</th>
            <th data-breakpoints="xs">HEADING</th>
            <th>PARAGRAPH</th>
           
               <th data-breakpoints="xs"> ACTION</th>
              <th data-breakpoints="xs"> ACTION</th>

          </tr>
        </thead>
        <tbody>

  <?php


$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"ritdata");

$sno=1;
$result=mysqli_query($con,"SELECT * from chcource order by id desc");
while($row=mysqli_fetch_array($result))
{
 
  ?>

  
   <tr data-expanded="true">
            <td><?php echo $sno++; ?> </td>
             <td ><img src="courceimg/<?php echo $row["image"]; ?>" style='width:200px; height: 200px;' ></td>
            <td><?php echo $row["heading"]; ?> </td>
            <td><?php echo $row["paragraph"]; ?> </td>
           
           
            <td><a href="chupdate.php?id=<?php echo $row['id']; ?> "> EDIT  </a>  </td>
        <td> <a href="deletecource.php?delete_id=<?php echo $row['id']; ?> ">DELETE </a>  </td>

            
            
          </tr>
          <?php
        }

        ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		
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
