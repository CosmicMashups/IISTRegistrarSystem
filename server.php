<?php //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$_SESSION['id'] = $row['id'];
$_SESSION['first'] = $row['firstname'];
$_SESSION['last'] = $row['lastname'];
$_SESSION['sex'] = $row['sex'];
$_SESSION['bday'] = $row['bday'];
$_SESSION['email'] = $row['email'];
$_SESSION['contact'] = $row['contact'];
$_SESSION['student1'] = $row['student1'];
$_SESSION['student2'] = $row['student2'];
$_SESSION['student3'] = $row['student3'];
$_SESSION['lrn'] = $row['lrn'];
$_SESSION['usertype'] = $row['usertype'];
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
}
?>