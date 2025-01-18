<?php session_start(); ?>
<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel = "stylesheet" href = "CSS/style.css">
<link rel = "stylesheet" href = "CSS/modal.css">
<link rel = "stylesheet" href = "CSS/tooltip.css">
<body background = "Pictures/building.jpg">
	<div class = "menu">
		<ul>
			<li></li> <li></li> <li></li> <li></li>
			<li><a href = "home.php"> <i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </a></li>
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
	</div>	

	<div class = "tableee">
		<br><br><form method = "POST" action = "esc_add.php" enctype="multipart/form-data">
			<table class = "form">
				<tr>
                    <td> <br><input type = "hidden" name="form" value="ESC"></td>
                </tr> <tr>
                    <td colspan = "2"><font color = "#696969"> <h1> <b> ESC Certification &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P50.00 </b></h1></font></td>
				</tr> <tr>
					<td><font color = "#696969">Username:</font></td>
					<td><font color = "#696969">Date Requested:</font></td>
				</tr> <tr>
					<td><input type="text" name="username" placeholder="Username"></td>
					<td><input type = "date" name = "date" min = "2019-01-01" required></td>
				</tr> <tr>
                    <td><font color = "#696969"> Grade and Section: </font></td>
           			<td><font color = "#696969">School Year:</font></td>
				</tr> <tr>
					<td> <select name = "grade" required>
						<option> --Grade-- </option> <br>
						<option value = "7"> 7 </option>
						<option value = "8"> 8 </option>
						<option value = "9"> 9 </option>
						<option value = "10"> 10 </option>
						<option value = "11"> 11 </option>
						<option value = "12"> 12 </option>
					</select>
                        <input type = "text" name = "section" placeholder = "Section" maxlength = "20" size = "20" required> <br> </td>
					<td> <select name = "schoolyear" required>
						<option> --School Year-- </option> <br>
						<option value = "2000-2001"> 2000-2001 </option> <br>
						<option value = "2001-2002"> 2001-2002 </option> <br>
						<option value = "2002-2003"> 2002-2003 </option> <br>
						<option value = "2003-2004"> 2003-2004 </option> <br>
						<option value = "2004-2005"> 2004-2005 </option> <br>
						<option value = "2005-2006"> 2005-2006 </option> <br>
						<option value = "2006-2007"> 2006-2007 </option> <br>
						<option value = "2007-2008"> 2007-2008 </option> <br>
						<option value = "2008-2009"> 2008-2009 </option> <br>
						<option value = "2009-2010"> 2009-2010 </option> <br>
						<option value = "2010-2011"> 2010-2011 </option> <br>
						<option value = "2011-2012"> 2011-2012 </option> <br>
						<option value = "2012-2013"> 2012-2013 </option> <br>
						<option value = "2013-2014"> 2013-2014 </option> <br>
						<option value = "2014-2015"> 2014-2015 </option> <br>
						<option value = "2015-2016"> 2015-2016 </option> <br>
						<option value = "2016-2017"> 2016-2017 </option> <br>
						<option value = "2017-2018"> 2017-2018 </option> <br>
						<option value = "2018-2019"> 2018-2019 </option> <br>
					</select> </td>
				</tr> <tr>
                    <td><font color = "#696969"> Mode of Payment: </font></td>
                    <td><font color = "#696969"> Reason/s: </font></td>
                </tr><tr>
					<td> <input type = "radio" name = "pay" value = "GCASH"> <img src = "Pictures/GCASH.jpg" width = "50%" height = "60%"> </td>
                    <td align = "center" rowspan="2"> <textarea class = "reason" name = "reason" placeholder = "(e.g. Varsity, Transfer, Extra-Curricular, Passport, VISA, etc.)" required></textarea> </td>
                </tr> <tr>                    
					<td> <input type = "radio" name = "pay" value = "PayMaya"> <img src = "Pictures/Paymaya.jpg" width = "50%" height = "60%"> </td>
				</tr> <tr>
                <td><font color = "#696969"> Authorization Letter + ID:
                        <div class = "tooltip"><i class="fas fa-question-circle"></i><span class = "tooltiptext"> Letter from the student with signature and the ID of the claimant and the student. </span></div> </font></td>
                    <td align = "center"> <input type = "file" name = "authorize" max=""></td>
                </tr> <tr>
					<td> <br><input type = "hidden" name="status" value="Sent!"></td>
				</tr> <tr>
                    <td colspan="2" align="center"><font color = "#696969"> <input type = "checkbox" required> By clicking this, you agree to the <span id = "myBtn" class = "a"> Terms and Conditions </span> policy. </font></td>
				</tr> <tr>
                    <td align="center" colspan="2"><center><button type = "submit" name = "submit"><span> Submit </span></button></center></td>
				</tr>
			</table>
		</form>
	</div>
    
	<div id = "myModal" class = "modal">
		<div class="modal-content">
			<div class="modal-header">
			<span class="close">&times;</span>
			<center> <h2> Terms and Conditions </h2> </center>
		</div>
		<div class="modal-body">
				<p> </p>
				<ul type = "">
					<li> Processing of documents will be from Monday to Friday only at 8:00 in the morning until 5:00 in the afternoon. </li> <br>
                    <li> Processing time may vary depending on requests load and the number of documents requested and year of admission. </li> <br>
                    <li> Price may change without prior notice and the Registrar may request for additional payment when needed. </li> <br>
					<li> The registrar will only entertain requests from people who are authorized by the former and present students of IIST. </li> <br>
					<li> The registrar cannot process documents from students who graduated before the school year 2000-2001. </li> <br>
				</ul>
		</div>
		<div class="modal-footer">
			<br> <br>
		</div>
	</div>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	</script>

</body>
</html>