<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registrar');


	// call the login() function if register_btn is clicked
	if (isset($_POST['login'])) {
		login();
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = $_POST['username'];
		$passwordd = $_POST['password'];

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($passwordd)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['usertype'] == 'Admin') {

					$_SESSION['id'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: a_home.php');		  
				}else{
					$_SESSION['id'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: home.php');
				}
			}else {
				array_push($errors, "Wrong username / password combination");
			}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['id']) && $_SESSION['id']['usertype'] == 'Admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>