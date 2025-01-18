<?php session_start();
include 'reg.php';
include 'log.php';
?>
<html>
<head>
	<title> IIST Online HS Document Requisition System </title>    
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background = "building.jpg">
<div class = "account">
	<form class = "form-signin" method = "POST">
		<h1 class = "heading"> Please Register! </h2>
		<input type = "text" name = "username" class = "form-control" placeholder = "Username" required>
		<label for = "inputEmail" class = "sr-only"> Email Address </label>
		<input type = "email" name = "email" id = "inputEmail" class = "form-control" placeholder = "Email Address" required autofocus>
		<label for = "inputPassword" class = "sr-only"> Password </label>
		<input type = "password" name = "password" id = "inputPassword" class = "form-control" placeholder = "Password" required>
		<button class ="button" style="vertical-align:middle" type = "submit"><span> Register </span></button>
	</form>
</div>
</body>
</html>