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

$sql = "UPDATE users SET usertype='Client' WHERE id='3'";

if (mysqli_query($con, $sql)) {
    echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
}else{
    echo "Failed to update record." . mysqli_error($con);
}

mysqli_close($con);
?>