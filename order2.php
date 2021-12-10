<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="database1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);


if(!$conn){
         die("connection failed:" .mysqli_connect_error());
}


if(isset($_POST['order']))
{
  $Name= $_POST['Name'];
  $Mobile_no= $_POST['Mobile_no'];
  $Coffee= $_POST['Coffee'];
  $Pizza = $_POST['Pizza'];
  $Juice =$_POST['Juice'];
  $dessert =$_POST['dessert'];

  
}

$sql_query = "INSERT INTO ordervk(name,Mobile_no,Coffee,Pizza,Juice,dessert)
VALUES ('$Name','$Mobile_no','$Coffee','$Pizza','$Juice','$dessert')";

if(mysqli_query($conn, $sql_query))
{
    echo "Order success";
}
mysqli_close($conn);
?>