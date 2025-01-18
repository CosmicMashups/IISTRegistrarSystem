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
			<li> <a href = "a_home.php"> <i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </a> </li>
			<br>
			<li><a href = "clients.php"> <i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp; Clients </a></li>
			<br>
			<li><a href = "request.php"> <i class="fas fa-question-circle"> </i> &nbsp;&nbsp;&nbsp; Requests </a></li>
			<br>
			<li class = "logout"> <a href = "logout.php"> <i class="fab fa-creative-commons-by"></i> &nbsp;&nbsp;&nbsp; Logout </a> </li>
		</ul>
	</div>

	<div class = "header">
		<img src = "Pictures/ii.png">
	</div>

	<div class = "heading">
		<h3> IIST HS Registrar Online Document Requisition System </h3>
		<hr>
	</div>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> FORM 137 </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM form137";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date1']. "</td>";
	echo "<td>" .$row['username1']. "</td>";
	echo "<td>" .$row['schoolyear1']. "</td>";
	echo "<td>" .$row['grade1']. "</td>";
	echo "<td>" .$row['section1']. "</td>";
	echo "<td>" .$row['reason1']. "</td>";
	echo "<td>" .$row['pay1']. "</td>";
	echo "<td>" .$row['authorize1']. "</td>";
	echo "<td>" .$row['status1']. "</td>";
	echo "<td><a href=Status/process1.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid1.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready1.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim1.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> FORM 138 </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM form138";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date2']. "</td>";
	echo "<td>" .$row['username2']. "</td>";
	echo "<td>" .$row['schoolyear2']. "</td>";
	echo "<td>" .$row['grade2']. "</td>";
	echo "<td>" .$row['section2']. "</td>";
	echo "<td>" .$row['reason2']. "</td>";
	echo "<td>" .$row['pay2']. "</td>";
	echo "<td>" .$row['authorize2']. "</td>";
	echo "<td>" .$row['status2']. "</td>";
	echo "<td><a href=Status/process2.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid2.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready2.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim2.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> Certificate of Good Moral Character </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM goodmoral";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date4']. "</td>";
	echo "<td>" .$row['username4']. "</td>";
	echo "<td>" .$row['schoolyear4']. "</td>";
	echo "<td>" .$row['grade4']. "</td>";
	echo "<td>" .$row['section4']. "</td>";
	echo "<td>" .$row['reason4']. "</td>";
	echo "<td>" .$row['pay4']. "</td>";
	echo "<td>" .$row['authorize4']. "</td>";
	echo "<td>" .$row['status4']. "</td>";
	echo "<td><a href=Status/process4.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid4.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready4.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim4.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> ESC Certification </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM esc";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date3']. "</td>";
	echo "<td>" .$row['username3']. "</td>";
	echo "<td>" .$row['schoolyear3']. "</td>";
	echo "<td>" .$row['grade3']. "</td>";
	echo "<td>" .$row['section3']. "</td>";
	echo "<td>" .$row['reason3']. "</td>";
	echo "<td>" .$row['pay3']. "</td>";
	echo "<td>" .$row['authorize3']. "</td>";
	echo "<td>" .$row['status3']. "</td>";
	echo "<td><a href=Status/process3.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid3.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready3.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim3.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> Certificate of Enrollment </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM enrollment";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date5']. "</td>";
	echo "<td>" .$row['username5']. "</td>";
	echo "<td>" .$row['schoolyear5']. "</td>";
	echo "<td>" .$row['grade5']. "</td>";
	echo "<td>" .$row['section5']. "</td>";
	echo "<td>" .$row['reason5']. "</td>";
	echo "<td>" .$row['pay5']. "</td>";
	echo "<td>" .$row['authorize5']. "</td>";
	echo "<td>" .$row['status5']. "</td>";
	echo "<td><a href=Status/process5.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid5.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready5.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim5.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> Certificate of Graduation </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM graduation";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date6']. "</td>";
	echo "<td>" .$row['username6']. "</td>";
	echo "<td>" .$row['schoolyear6']. "</td>";
	echo "<td>" .$row['grade6']. "</td>";
	echo "<td>" .$row['section6']. "</td>";
	echo "<td>" .$row['reason6']. "</td>";
	echo "<td>" .$row['pay6']. "</td>";
	echo "<td>" .$row['authorize6']. "</td>";
	echo "<td>" .$row['status6']. "</td>";
	echo "<td><a href=Status/process6.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid6.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready6.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim6.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
        </table> </div></div>
	<br>
	
    <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "10"> <h1> ID Replacement </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            <th> Payment </th>
			<th> Reason </th>
            <th> Letter </th>
			<th> Status </th>
            <th colspan="4"> Update </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM id";
	$rec = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array ($rec))
		{
	echo "<tr>";
	echo "<td>" .$row['date8']. "</td>";
	echo "<td>" .$row['username8']. "</td>";
	echo "<td>" .$row['schoolyear8']. "</td>";
	echo "<td>" .$row['grade8']. "</td>";
	echo "<td>" .$row['section8']. "</td>";
	echo "<td>" .$row['reason8']. "</td>";
	echo "<td>" .$row['pay8']. "</td>";
	echo "<td>" .$row['authorize8']. "</td>";
	echo "<td>" .$row['status8']. "</td>";
	echo "<td><a href=Status/process8.php?id=".$row['id']."><font color = #696969>Process</font></a></td>";
	echo "<td><a href=Status/invalid8.php?id=".$row['id']."><font color = #696969>Invalid</font></a></td>";
	echo "<td><a href=Status/ready8.php?id=".$row['id']."><font color = #696969>Ready</font></a></td>";
	echo "<td><a href=Status/claim8.php?id=".$row['id']."><font color = #696969>Claim</font></a></td>";
	echo "</tr>";
		}
?>
    </table></div></div><br>
</body>
</html>