<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registrar');

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if($results==true)
        {
            $_SESSION['username']=$username;
            if ($_SESSION['usertype'] == 'Admin') {
					$_SESSION['success']  = "You are now logged in";
					header('location: a_home.php');		  
				}else{
					$_SESSION['success']  = "You are now logged in";
					header('location: home.php');
            }
        }
    }

?>