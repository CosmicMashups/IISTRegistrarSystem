<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$db = mysqli_select_db($connection, 'registrar');
if (!$db){
    die("Database Selection Failed" . mysqli_error($connection));
}