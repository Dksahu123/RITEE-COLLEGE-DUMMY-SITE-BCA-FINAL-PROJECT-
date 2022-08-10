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
	 $sn=$_POST['sname'];
   $fn=$_POST['fname'];
    $cl=$_POST['class'];
    $mob=$_POST['mobile'];
         $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tempname, "dataimg/$imagename");

$result=mysqli_query($con,"update addstudent set studentname ='$sn' , fathername='$fn', class='$cl',mobile='$mob', image='$imagename' where id='$id'");

 if($result)
 {

header("location: sttable.php");
 }
else 
{
	echo "Something wrong";
}
}