<?php
$con=mysqli_connect("localhost","root","","registrar");
$username = $_GET['username'];
$password = $_GET['password'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT id FROM members where username='".$username."' and password='".$password."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
  {
  echo $row['id'];
  }
mysqli_close($con);
?>

