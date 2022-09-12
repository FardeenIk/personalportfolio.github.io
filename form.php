<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $subject = $_POST['usubject'];
    $message = $_POST['umessage'];
    $ins = "INSERT INTO `user_data`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    mysqli_query($conn,$ins);
    session_start();
    header('location:index.html');
}

?>