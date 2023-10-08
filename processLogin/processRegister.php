<?php
session_start();

if (isset ($_POST['btnsignup'])) {
include './connectDB.php';

    $un = $_POST['username'];
    $pw = $_POST['password'];
    $em = $_POST['email'];
    $cfp = $_POST['confirmPassword'];

    $isValid = true;

    // Check fields are empty or not
    if($un == '' || $pw == '' || $cfp == '' || $em == '') {
        $isValid = false;
        echo "<script>alert('Please fill all the fields');</script>";
    }
    // Check if confirm password matching or not
    if($isValid && ($pw != $cfp)){
        $isValid = false;
        echo "<script>alert('Passwords do not match');</script>";
        require "register.html";

    }
    // Check if username already exists or not
    // Check if Email-ID is valid or not
    if($isValid && !filter_var($em, FILTER_VALIDATE_EMAIL)){
        $isValid = false;
        echo "<script>alert('Invalid Email');</script>";
        require "register.html";
    }
    if ($isValid){
        //check if email already exits
        $sql = 'SELECT * FROM `users` WHERE email = "'.$em.'"';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $isValid = false;
            echo "<script>alert('Email already exists');</script>";
            require "register.html";

        }
    } 
    //insert records
    if($isValid){
        $sql = 'INSERT INTO `users` (`username`, `password`, `email`) VALUES ("'.$un.'", "'.$pw.'", "'.$em.'")';
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:./login.html");
        } else {
            require "register.html";

        }

    }
$conn->close();
 
}


?>