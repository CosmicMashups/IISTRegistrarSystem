<?php	
$db = mysqli_connect("localhost","root","","registrar");

if(isset($_POST['submit']));
 {
		$form = $_POST['form'];
		$username = $_POST['username'];	
        $date = $_POST['date'];	
		$grade = $_POST['grade'];
		$section = $_POST['section'];
		$schoolyear = $_POST['schoolyear'];
        $pay = $_POST['pay'];
		$reason = $_POST['reason'];
        $authorize = $_POST['authorize'];
        $status = $_POST['status'];

	$sql = "INSERT INTO enrollment (username, date, schoolyear, grade, section, pay, reason, authorize, status)
	VALUES ('$username','$date','$schoolyear','$grade','$section','$pay','$reason','$authorize','$status')";
	mysqli_query($db, $sql);
	}
?>

<html>
<head>
	<title> IIST Online HS Registrar System </title>
	<meta http-equiv="refresh" content="3; URL='home.php'" />
</head>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<body background = "Pictures/building.jpg">
	<div class = "menu">
		<ul>
			<li></li> <li></li> <li></li> <li></li>
			<li> <a href = "home.php"> <span class = "fa fa-home"> </span> Home </a> </li>
                                                <br>
			<li> <span class = "fa fa-desktop"> </span> Request
				<ul>
					<li> <span class = "fa fa-plus"> </span> Forms
						<ul>
							<li> <a href = "form137.php"> <span class = "fa fa-plus"> </span> Form 137 </a> </li>
							<li> <a href = "form138.php"> <span class = "fa fa-plus"> </span> Form 138 </a> </li>
						</ul>
					</li>
					<li> <span class = "fa fa-plus"> </span> Certificates
						<ul>
							<li> <a href = "goodmoral.php"> <span class = "fa fa-plus"> </span> Good Moral Certificate </a> </li>
							<li> <a href = "esc.php"> <span class = "fa fa-plus"> </span> ESC Certification </a> </li>
							<li> <a href = "enrollment.php"> <span class = "fa fa-plus"> </span> Certificate of Enrollment </a> </li>
							<li> <a href = "graduation.php"> <span class = "fa fa-plus"> </span> Certificate of Graduation </a> </li>
						</ul>
					</li>
					<li> <span class = "fa fa-plus"> </span> Others 
						<ul>
							<li> <a href = "id.php"> <span class = "fa fa-plus"> </span> ID Replacement </a> </li>
						</ul>
					</li>
				</ul>
			</li>
			<br>
			<li> <a href = "faqs.php"> <span class = "fa fa-database"> </span> FAQs </a> </li>
			<br>
			<li> <span class = "fa fa-users"> </span> About </li>
		</ul>
	</div>

	<div class="header">
		<img src = "Pictures/ii.png">
	</div>

	<div class = "add">
		<h3> IIST HS Registrar Online Document Requisition System </h3>
		<h3> Thank you! </h3>
		<p> Your response has been recorded. If you have further questions, you may contact us by telephone, (046) 471 - 3898. Thank you for your time and cooperation.
	</div>
		
</body>
</html>