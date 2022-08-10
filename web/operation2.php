<?php



//Get DATA through connectivity

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);

mysqli_select_db($con,"ritdata");

 if (isset($_POST['update']))

 {
 	$id=$_POST["id"];
	 $head=$_POST['hd'];
   $para=$_POST['pr'];
    
         $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tempname, "courceimg/$imagename");

$result=mysqli_query($con,"update chcource set heading ='$head' , pragraph='$para',  image='$imagename' where id='$id'");

 if($result)
 {

header("location: showtable.php");
 }
else 
{
	echo "Something wrong";
}
}