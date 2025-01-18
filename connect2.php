<?php
$con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'registrar');
        // Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $sql = str_replace("\'","",$sql); 
        $result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
  {
  echo $row['id'];
  }
mysqli_close($con);
?>