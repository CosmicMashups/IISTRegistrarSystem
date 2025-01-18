<?php	
$db = mysqli_connect("localhost","root","","registrar");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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
        
        $filename = $_FILES['authorize']['name'];
        $filetmpname = $_FILES['authorize']['tmp_name'];
        $filesize = $_FILES['authorize']['size'];
        $fileerror = $_FILES['authorize']['error'];
        $filetype = $_FILES['authorize']['type'];
        
        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg', 'png');
        
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'Letters/'.$fileNameNew;
                    move_uploaded_file($filetmpname, $fileDestination);
                    header("Location: esc_add.php?success");
                }else{
                    echo "Your file is too big!";
                    }
                }else{
                echo "There was an error uploading your file.";
            }
        }else{
            echo "The system only accepts .jpeg and .png images.";
        }
        $status = $_POST['status'];

	$sql = "INSERT INTO enrollment (username, date, schoolyear, grade, section, pay, reason, authorize, status)
	VALUES ('$username','$date','$schoolyear','$grade','$section','$pay','$reason','$authorize','$status')";
	mysqli_query($db, $sql);
	}
?>

<html>
<head>
	<title> IIST HS Registrar Online Document Requisition System </title>
	<meta http-equiv="refresh" content="3; URL='home.php'" />
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel = "stylesheet" href = "CSS/style.css">
<link rel = "stylesheet" href = "CSS/modal.css">
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
							<li> <span class = "fa fa-plus"> </span> Form 137 </li>
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
		<h3> Thank you! </h3>
	</div>
	<div class = "add">
        <p> Your response has been recorded. If you have further questions, you may contact us by telephone, (046) 471 - 3898. Thank you for your time and cooperation. </p>
	</div>
		
</body>
</html>