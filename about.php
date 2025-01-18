<?php session_start(); ?>
<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel = "stylesheet" href = "CSS/style.css">
<link rel = "stylesheet" href = "CSS/animate.css">
<body background = "Pictures/building.jpg">
    <div class = "menu">
		<ul>
			<li></li> <li></li> <li></li> <li></li>
			<li> <i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </li>
			<br>
			<li><a href = "c_request.php"><i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp; Request</a>
				<ul>
					<li> <i class="fas fa-file-alt"></i> &nbsp;&nbsp;&nbsp; Forms
                        <ul>
							<li> <a href = "form137.php"> <span class = "fa fa-plus"> </span> Form 137 </a> </li>
                            <li> <a href = "form138.php"> <span class = "fa fa-plus"> </span> Form 138 </a> </li>
                        </ul>
                    </li>
					<li> <i class="fas fa-certificate"></i> &nbsp;&nbsp; Certificates
						<ul>
							<li> <a href = "goodmoral.php"> <span class = "fa fa-plus"> </span> Good Moral Certificate </a> </li>
							<li> <a href = "esc.php"> <span class = "fa fa-plus"> </span> ESC Certification </a> </li>
							<li> <a href = "enrollment.php"> <span class = "fa fa-plus"> </span> Certificate of Enrollment </a> </li>
							<li> <a href = "graduation.php"> <span class = "fa fa-plus"> </span> Certificate of Graduation </a> </li>
						</ul>
					</li>
					<li> <i class="fas fa-images"></i> &nbsp;&nbsp;&nbsp;Others 
						<ul>
							<li> <a href = "id.php"> <span class = "fa fa-plus"> </span> ID Replacement </a> </li>
						</ul>
					</li>
				</ul>
			</li>
			<br>
			<li> <a href = "faqs.php"> <i class="fas fa-question-circle"> </i> &nbsp;&nbsp;&nbsp; FAQs </a> </li>
			<br>
			<li> <a href = "about.php"> <i class = "far fa-address-card"> </i> &nbsp;&nbsp; About </a> </li>
			<br>
			<li class = "logout"> <a href = "logout.php"> <i class="fab fa-creative-commons-by"> </i> &nbsp;&nbsp;&nbsp; Logout </a> </li>
		</ul>
	</div>
	<div class="header">
		<img src = "Pictures/ii.png">
	</div>

	<div class = "about">
		<font color="white"><h1> About the High School Registrar </h1></font>
		<table class = "form">
			<tr>
				<td colspan = "2"><h1 color = "white"> Office of the High School Registrar </h1></td>
			</tr> <tr>
				<td> </td>
			</tr> <tr>
				<td colspan = "2" align = "center"> <img src = "Pictures/registrar.jpg"> </td>
			</tr> <tr>
				<td> </td>
			</tr> <tr>
				<td> <h3> Contact Number: </h3> </td>
				<td> <h3> Office Hours: </h3> </td>
			</tr> <tr>
				<td> (046) 471 - 3898 </td>
				<td> Monday to Friday [8:00 AM to 5:00 PM] </td>
			</tr> <tr>
				<td> <h3> Located at: </h3> </td>
			</tr> <tr>
				<td colspan ="2"> 1st Floor D-Building, Imus Institute of Science and Technology (Dimasalang Campus), Dimasalang Subdivision, Poblacion IV-B, City of Imus, Cavite </td>
			</tr> 
		</table>
		<br><br>
	</div>
</body>
</html>