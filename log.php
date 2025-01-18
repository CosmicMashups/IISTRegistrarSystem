<?php
session_start();
	$connection = mysqli_connect('localhost', 'root', '');
		if (!$connection){
    			die("Database Connection Failed" . mysqli_error($connection));
		}
	
	$db = mysqli_select_db($connection, 'registrar');
		if (!$db){
    			die("Database Selection Failed" . mysqli_error($connection));
		}

	if (isset($_POST['username']) and isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM clients WHERE username='$username' and password='$password'";
 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if($count == 1){
    		$_SESSION['username'] == $username;
    		header('location: home.php');
  	}else{
    		$fmsg = "User does not exist.";
  		}
	}

	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
			echo "Hai " . $username . "";

			echo "This is the Members Area";

			echo "<a href='logout.php'>Logout</a>";
 
	}else{
	}
?>