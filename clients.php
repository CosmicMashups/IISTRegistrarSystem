<?php session_start(); ?>
<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel = "stylesheet" href = "CSS/style.css">
<body background = "Pictures/building.jpg">
	<div class = "menu">
		<ul>
			<li></li> <li></li> <li></li> <li></li>
			<li><a href = "a_home.php"> <i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </a> </li>
			<br>
			<li><a href = "clients.php"> <i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp; Clients </a></li>
			<br>
			<li><a href = "request.php"> <i class="fas fa-question-circle"> </i> &nbsp;&nbsp;&nbsp; Requests </a></li>
			<br>
			<li class = "logout"> <a href = "logout.php"> <i class="fab fa-creative-commons-by"> </i> &nbsp;&nbsp;&nbsp; Logout </a> </li>
		</ul>
	</div>

	<div class = "header">
		<img src = "Pictures/ii.png">
	</div>

	<div class = "heading">
		<h3> IIST HS Registrar Online Document Requisition System </h3>
		<hr>
		<h4> Client Information </h4>
	</div>
	
	<div class = "data">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> FORM 137 </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Username </th>
			<th colspan = "3"> Full Name </th>
			<th> Email Address </th>
			<th> Contact </th>
			<th> Birthdate </th>
			<th> Sex </th>
			<th colspan = "3"> Student Number </th>
			<th> LRN </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM clients";
	$hi = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($hi))
		{
	echo "<tr>";
	echo "<td>" .$row['username']. "</td>";
	echo "<td>" .$row['firstname']. "</td>";
	echo "<td>" .$row['middlename']. "</td>";
	echo "<td>" .$row['lastname']. "</td>";
	echo "<td>" .$row['email']. "</td>";
	echo "<td>" .$row['contact']. "</td>";
	echo "<td>" .$row['bday']. "</td>";
	echo "<td>" .$row['sex']. "</td>";
	echo "<td>" .$row['student1']. "</td>";
	echo "<td>" .$row['student2']. "</td>";
	echo "<td>" .$row['student3']. "</td>";
	echo "<td>" .$row['lrn']. "</td>";
	echo "</tr>";
		}
?>
	</table>
	</div>
</body>
</html>