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
			<li><a href = "c_request.php"><i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp; My Requests</a>
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

	<div class = "header">
		<img src = "Pictures/ii.png">
	</div>

	<div class = "heading">
		<h3> IIST HS Registrar Online Document Requisition System </h3>
		<hr>
	</div>

	<div class = "intro">		
		<h2> Home </h2>
		<p> IIST HS Registrar Online Document Requisition System is an online system wherein you can request forms and documents to the registrar to make the work efficiently. 
		This system can let the client request from whenever they are located as long as they have an internet connection. It also provides assistance specifically to 
		bonafide high school students of IIST who have chosen to transfer to different school or those who participate in special outdoor activities. 
		This also lends a hand for parents who don't have time for requesting a document personally. </p>
	</div>

	<div id = "slider">
		<figure frame = "box">
            <img src = "Pictures/reg.PNG">
			<img src = "Pictures/form137.PNG">
			<img src = "Pictures/form138.PNG">
			<img src = "Pictures/goodmoral.PNG">
			<img src = "Pictures/esc.PNG">
			<img src = "Pictures/enrollment.PNG">
			<img src = "Pictures/graduation.PNG">
			<img src = "Pictures/diploma.PNG">
			<img src = "Pictures/id.PNG">
			<img src = "Pictures/servicefee.PNG">
        </figure>
		<br><br>
    </div>
</body>
</html>