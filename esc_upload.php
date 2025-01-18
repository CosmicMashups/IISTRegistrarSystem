<?php
if(isset($_POST['submit']))
{
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
}
?>