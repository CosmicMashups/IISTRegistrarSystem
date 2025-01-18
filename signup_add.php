<?php	
$db = mysqli_connect("localhost","root","","registrar");

if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$sex = $_POST['sex'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$student1 = $_POST['student1'];
		$student2 = $_POST['student2'];
		$student3 = $_POST['student3'];
		$lrn = $_POST['lrn'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		$sql_u = "SELECT * FROM clients WHERE username='$username'";
		$res_u = mysqli_query($db, $sql_u);

		if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	  	}else{
  	  	}

		if ($_POST["password"] == $_POST["cpassword"]) {
	   		// Success!
		}
		else {
	   		// Failed.
		}


	       	$sql = "INSERT INTO clients (firstname, middlename, lastname, sex, bday, email, contact, student1, student2, student3, lrn, username, password) 
		VALUES ('$firstname','$middlename','$lastname','$sex','$bday','$email','$contact','$student1','$student2','$student3','$lrn', '$username', '$password')";
		mysqli_query($db, $sql);
	}
?>

<html>
<head>
	<title> IIST Online HS Registrar System </title>
	<meta http-equiv="refresh" content="5; URL='login.php'" />
</head>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body background = "building.jpg">
<font color = "white">
	<br>
		<center><h1> IIST HS Registrar Online Document Requisition System </h1></center>
	<hr>
	<h2> Thank You! </h2>
		<p> Your response has been recorded. If you have further questions, you may contact us by telephone, (046) 471 - 3898. Thank you for your time and cooperation. </p>
</font>
</body>
</html>