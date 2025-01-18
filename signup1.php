<?php	
$db = mysqli_connect("localhost","root","","registrar");

if(isset($_POST['Submit']));
	{
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$student1 = $_POST['student1'];
		$student2 = $_POST['student2'];
		$student3 = $_POST['student3'];
		$lrn = $_POST['lrn'];

		$sql = "INSERT INTO user (firstname, middlename, lastname, email, contact, student1, student2, student3, lrn)
		VALUES ('$firstname','$middlename','$lastname','$email','$contact','$student1','$student2','$student3','$lrn')";
		mysqli_query($db, $sql);
	}
?>

<?php 
include 'reg.php';
?>
<html>
<head>
	<title> IIST Online HS Document Requisition System </title>    
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background = "building.jpg">
<div class = "signup">
	<form class = "form-signin" method = "POST" action = "signup_add.php">
		<table class = "form">
			<tr>
				<td width = "300px" colspan = "2" align = "center"> <b> <h1> Sign Up </h1> </b> </td>
			</tr> <tr>
				<td width = "300px"> <b> <h2> User Information </h2> </b> </td>
			</tr> <tr>			
				<td width = "300px"> Username: </td>
				<td> <input type = "text" size = "50" padding = "50" name = "username" placeholder = "Username" required> </td>
                                                </tr> <tr>
				<td width = "300px"> Password: </td>
				<td> <input type = "password" size = "50" name = "password" placeholder = "Password" required> </td>
			</tr> <tr>	
				<td width = "300px"> Confirm Password: </td>
				<td> <input type = "password" size = "50" name = "password" placeholder = "Confirm Password" required> </td>
			</tr> <tr>	
				<td width = "300px"> <button class ="button" style="vertical-align:middle" type = "reset"> Reset </button> </td>
				<td align = "center"> <button class ="button" style="vertical-align:middle" type = "submit"><span> Sign Up </span></button> </td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>