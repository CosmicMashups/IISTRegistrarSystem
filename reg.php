<?php
    require('connect.php');

    $username = "";
    $email = "";

    $sql_u = "SELECT * FROM users WHERE username='$username'";
        $res_u = mysqli_query($db, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
 		$fsmg = "Sorry... Username already taken.";
    
    $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_e = mysqli_query($db, $sql_u);
        if (mysqli_num_rows($res_e) > 0) {
 		$fsmg = "Sorry... Email Address already taken.";
            
 	}else if ($_POST["password"] == $_POST["cpassword"]) {
        echo "";        
	}
    else {
        $fsmg = "Incorrect password.";
    }
}
?>