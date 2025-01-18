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
			<li> <i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </li>
			<br>
			<li> <i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp; Request
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
		<h4> Frequently-Asked Questions (FAQs) </h4>
	</div>
    
    <div class="add">
			<b class="b"> How will the requestor know when to claim the document/s? </b>
			<p>Option 1: <br>
                <p><p> By receiving your email address through the sign up, the registrar will use that to send an said you can get the forms immediately while the certificates and others can be received after 1-2 weeks after payment. </p>
            <p>Option 2: <br>
        <p><p> You can check the <a href = "c_request">My Requests</a> tab to check the status of the documents you have requested. </p>
			<b class="b"> What kind of copy of the document will I get? </b> <br>
			<p> Original copy. </p>
			<b class="b"> What is an original copy? </b>
			<p> Original copy is the authentic copy of the document. </p>
			<b class="b"> How do I certify the original copy that I received into a certified true copy? </b> <br>
			<p> After claiming the original copy of the document, go to the HS Cashier for the dry seal and pay for the requested amount. </p>
			<b class="b"> What is the difference between a certified true copy and an original copy? </b> <br>
			<p> Certified true copy has dry seal while the original copy has not. </p>
			<b class="b"> How does payment work? </b>
			<p> The client may use PayMaya or GCASH as the method of payment. </p> 
			<b class="b"> How does this ensure the safety and the privacy of students personal information? </b>
			<p> As how registrar takes care of safety and security issues, the system will also be doing that as well as implementing the Data Privacy Act. </p>
			<br><br><br><br>
		</div>
</body>
</html>