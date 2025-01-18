<?php
include 'server.php';
?>
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
            <li> <a href = "home.php"><i class="fas fa-home"> </i> &nbsp;&nbsp;&nbsp; Home </a></li>
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
    
    <?php  if (isset($_SESSION['username'])) : ?>
    <div class = "aform">
        <table class = "form">
            <tr style= "color: black;">
               <tr style = "color: black;">
			<th colspan="2"> <h2><?php echo $_SESSION['username']; ?>
                <i style="color: #888;"><?php echo $_SESSION['username']; ?></i></h2> </th>
            </tr> <tr>
                <td> Full Name: </td>
                <td> Email Address: </td>
            </tr> <tr>
                <td> Birthdate: </td>
                <td> Sex: </td>
            </tr> <tr>
                <td> Student ID: </td>
                <td> Learner's Resource Number: </td>
            </tr>
        </table>
    </div>
	<?php endif ?>
      <div class = "aform">
	<div class = "formss">
		<table class = "form">
		<tr style = "color: black;">
			<th colspan = "11"> <h1> FORMS REQUESTED </h1> </th>
		</tr> <tr style = "color: black;">
			<th> Form </th>
			<th> Date Requested </th>
			<th> Username </th>
			<th> School year </th>
			<th> Grade </th>
			<th> Section </th>
            		<th> Payment </th>
			<th> Reason </th>
            		<th> Letter </th>
			<th> Status </th>
			<th> Delete </th>
		</tr>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'registrar');
	$sql = "SELECT * FROM requests WHERE username = '".$_SESSION["u_uname"]."'";
	$rec = mysqli_query($con, $sql);
	$res = mysqli_fetch_assoc($rec);
	while ($row = mysqli_fetch_array ($res))
		{
	echo "<tr>";
	echo "<td>" .$row['form']. "</td>";
	echo "<td>" .$row['date']. "</td>";
	echo "<td>" .$row['username']. "</td>";
	echo "<td>" .$row['schoolyear']. "</td>";
	echo "<td>" .$row['grade']. "</td>";
	echo "<td>" .$row['section']. "</td>";
	echo "<td>" .$row['reason']. "</td>";
	echo "<td>" .$row['pay']. "</td>";
	echo "<td>" .$row['authorize']. "</td>";
	echo "<td>" .$row['status']. "</td>";
	echo "<td><a href=Status/delete1.php?id=".$row['id']."><font color = #696969>Delete</font></a></td>";
	echo "</tr>";
		}
?>
        </table>
	<br></div></div><br>
</body>
</html>