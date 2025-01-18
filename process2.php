<?php
session_start();
	$conn = mysqli_connect('localhost', 'root', '');
		if (!$conn){
    			die("Database Connection Failed" . mysqli_error($conn));
		}
	
	$db = mysqli_select_db($conn, 'registrar');
		if (!$db){
    			die("Database Selection Failed" . mysqli_error($conn));
		}

if(isset($_POST['submit'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $umail = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Error handlers
    //Check if inputs are empty
    if(empty($uname) || empty($pwd)) {
        header("Location: login.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE id='$uname' OR email='$umail'";
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1) {
            header("Location: login.php?login=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hasedPwdCheck = password_verify($pwd, $row['password']);
                if($hasedPwdCheck == false){
                    header("Location: login.php?login=error");
                    exit();
                }elseif($hasedPwdCheck == true){
                    //Log in the user here
                    $_SESSION['u_id'] = $row['id'];
                    $_SESSION['u_first'] = $row['firstname'];
                    $_SESSION['u_last'] = $row['lastname'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uname'] = $row['username'];
                    header("Location: home.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: login.php?login=error");
    exit();
}