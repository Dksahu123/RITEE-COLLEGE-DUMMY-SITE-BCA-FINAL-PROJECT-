<?php



include("header.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>our cources</title>
  </head>
  <body>
    

			<div class="row" >
		    			  <div class="col-sm-12" style="margin-top : 5px; background-color:red;height:auto; width: 100%;">
		    			  	<h1 align="center">OUR COURSES</h1>
		    			  
		    			
<?php
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");

$rs=mysqli_query($con,"SELECT * FROM chcource order by id desc   ");
while($row=mysqli_fetch_array($rs))
{
	$image=$row['image'];
	$head=$row['heading'];
	$para=$row['paragraph'];



?>



  <div class="card col-sm-4">
    <img src="web/courceimg/<?php echo $image; ?>" class="card-img-top" alt="..." style="height:200px; width:300px">
    <div class="card-body">
    <u>  <h2 class="card-title" style="height:50px; width:300px"><?php echo $head; ?></h2></u>
      <p class="card-text"style="font-size: 15px; font-family: cursive;height:200px; width:300px"><?php echo $para; ?></p>
        <a href="#" class="btn btn-primary" style="height:40px;width: 200px; font-size: 15px;">APPLY FOR MORE ENQUIRY</a>
    </div>
     
  </div>
 
		
<?php

}


?>    			 
		    			



		    			

		    	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


  </body>
</html>