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
<body background = "building.jpg" background-attachment = "fixed">
<div class = "signup">
	<div id = "sliding">
	<form class = "form-signin" method = "POST" action = "signup_add.php" onsubmit="return checkform(this);">
		<table class = "form">
			<tr>
				<td width = "300px" colspan = "2" align = "center"> <b> <h1> Sign Up </h1> </b> </td>
			</tr> <tr>
				<td width = "300px" colspan = "2"> <b> <h2> Student's Information </h2> </b> </td>
			</tr> <tr>			
				<td width = "300px"> First Name: </td>
				<td> <input type = "text" size = "50" padding = "50" name = "firstname" placeholder = "First Name" required> </td>
			</tr> <tr>
				<td> Middle Name: </td>
				<td> <input type = "text" size = "50" name = "middlename" placeholder = "Middle Name" required> </td>
			</tr> <tr>
				<td> Last Name: </td>
				<td> <input type = "text" size = "50" name = "lastname" placeholder = "Last Name" required> </td>
			</tr> <tr>
				<td> Sex: </td>
				<td> <input type = "radio" name="sex" value = "Male"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type = "radio" name="sex" value = "Female"> Female </td>
			</tr> <tr>
				<td> Birthdate: </td>
				<td> <input type = "date" name = "bday" min = "1970-01-01" required> </td>
			</tr> <tr>
				<td> Email Address: </td>
				<td> <input type = "email" name = "email" size = "50" placeholder = "Email Address" required> </td>
			</tr> <tr>
				<td> Contact No.: </td>
				<td> <input type = "number" name = "contact" size = "50" maxlength = "11" max = "09999999999" placeholder = "Contact No. (optional)"> </td>
			</tr> <tr>
				<td> Student ID: (optional) </td>
				<td> <input type = "text" name = "student1" size = "10" maxlength = "3" placeholder = "Initials"> - <input type = "text" size = "10" name = "student2" maxlength = "4" placeholder = "Year"> - <input type = "text" size = "10" name = "student3" maxlength = "4" placeholder = "Number"> </td>
			</tr> <tr>
				<td> Learner's Reference Number: </td>
				<td> <input type = "text" name = "lrn" size = "50" maxlength = "12" placeholder = "Learner's Reference Number (optional)"> </td>
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
				<td> <input type = "password" size = "50" name = "cpassword" placeholder = "Confirm Password" required> </td>
			</tr> <tr>
				<td> <div id="CaptchaDiv"></div> </td>
				<td> <input type="hidden" id="txtCaptcha"> <input type="text" name="CaptchaInput" id="CaptchaInput" 
					size="15" placeholder="Verification Code"> </td>
			</tr> <tr>
				<td> <button class ="button" type = "reset"> Reset </button> </td>
				<td align = "center"> <button type = "submit" class ="button" name = "submit"><span> Sign Up </span></button> </td>
			</tr>
		</table>
	</form>
	</div>
</div>
<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

</body>
</html>