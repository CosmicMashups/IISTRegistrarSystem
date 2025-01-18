<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "registrar";

$con = mysqli_connect($server, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

$id = $_GET['id'];
$sql = "UPDATE form137 SET status1='Ready!' WHERE id='$id'";

if (mysqli_query($con, $sql)) {
    echo "<meta http-equiv='refresh' content='0;url=../request.php'>";
}else{
    echo "Failed to update record." . mysqli_error($con);
}

mysqli_close($con);
?>