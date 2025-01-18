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

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if($count == 1){
    		$_SESSION['username'] == $username;
		$_SESSION['id'] = $UserID;
		$_SESSION['usertype'] = $UserType;
		if($UserType == "Client") {
        		header("Location: home.php");
		}
   		else if ($UserType == "Admin") {
       			header("Location: a_home.php");
  		}else{
    			$fmsg = "User does not exist.";
  		}
	}
?>

<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

	<link rel="stylesheet" href="style3.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background = "building.jpg">
<div class = "login">
	<form class="form-signin" method="POST">
		<table frame = "box" class = "form">
			<tr>
				<td> <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> </td>
			</tr> <tr>
				<td width = "300px" colspan = "1" align = "center"> <b> <h1> Login </h1> </b> </td>
			</tr> <tr>			
				<td width = "300px"> Username: </td>
			</tr> <tr>	
				<td> <input type = "text" size = "50" padding = "50" name = "username" placeholder = "Enter Username" required> </td>
                                                </tr> <tr>
				<td> Password: </td>
			</tr> <tr>
				<td> <input type = "password" size = "50" name = "password" placeholder = "Enter Password" required> </td>
			</tr> <tr>	
				<td align = "center"> <button class ="button" style="vertical-align:middle" type = "submit"><span> Login </span></button> </td>
			</tr> <tr>
				<td> Don't have an account? <a href = "signup.php"> Sign Up </a> now! </td>
			</tr> <tr>
				<td> Are you an admin? <a href = "adminlog.php"> Login </a> here! </td>
			</tr>
		</table>
    </form>
</div>
</body>
</html>
<?php } ?>