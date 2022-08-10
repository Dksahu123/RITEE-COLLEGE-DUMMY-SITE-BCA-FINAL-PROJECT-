<?php


    $head="";
	$para="";
	
	$imagename="";


$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);

mysqli_select_db($con,"ritdata");
if(isset($_REQUEST['id']))
{

$id=$_REQUEST['id'];
$rs=mysqli_query($con,"SELECT * from chcource where id ='$id'");

while ($row=mysqli_fetch_array($rs))
{
    $head=$row['heading'];
	$para=$row['paragraph'];
	$imagename=$row['image'];


	
}


}


?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('new.jpg');">
	<div class="container" style="background-color:black; color: white;font-size: 24px; width:600px; margin-top:100px;">
		<form action="operation2.php" method="POST" enctype="multipart/form-data" class="form-group" style="width:500px; ">
		<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
		HEADING <input type="text" name="hd" class="form-control" value="<?php echo $head;?>"> <br>
		PARAGRAPH<input type="text" class="form-control" name="pr" value="<?php echo $para;?>" > <br>
	
		image<input type="file" class="form-control" name="image" value="<?php echo $imagename;?>"> <br>



		<?php
		if(isset($_GET['id']))
		{
			?>

		<input type="submit" name="update" value="update" class="btn btn-success" style="width:150px; height:50px;border-radius: 10px;">
		<?php
		}
       else
       {
       	?>
<input type="submit" name="save" value="Press Here">
<?php
       }
		?>

		

	





	</form>
	</div>


</body>
</html>
