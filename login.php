<?php //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if($count == 1){
    $_SESSION['username'] = $username;
    header('location: home.php');
  }else{
    $fmsg = "User does not exist.";
  }
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>

<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

	<link rel="stylesheet" href="CSS/style3.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background = "Pictures/building.jpg">
<div class = "login">
	<form class="form-signin" method="POST">
		<table frame = "box" class = "form">
			<tr>
				<td> <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> </td>
			</tr> <tr>
				<td width = "300px" colspan = "2" align = "center"> <b> <h1> Login </h1> </b> </td>
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
			</tr>
		</table>
      	</form>
</div>
</body>
</html>
<?php } ?>