


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>search example</title>
  </head>
  <body>
    <h1>search coding for practice</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">

          <form class="form-group" enctype="multipart/form-data" action="new.php" method="POST" style="width:500px; ">
            <input type="text" name="search_value" placeholder="search here" class="form-control">
            <br>

          <input type="submit" name="search" class="btn btn-primary" value="search">
            



          </form>
          




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

   
 
