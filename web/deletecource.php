
<?php
$host="localhost";
$user="root";
$password="";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"ritdata");



if(isset($_GET["delete_id"]))
{

 $id=$_GET["delete_id"];
$rs=mysqli_query($con,"delete from chcource where id='$id'");

if($rs)
{
	echo("<script>alert('data has been deleted')</script>");
	 header("location:showtable.php");
}
else
{
	echo "Something Wrong";
}


}



?>