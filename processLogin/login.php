<?php
include './connectDB.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $un = $_POST['username'] ?? '';
    $pw = $_POST['password'] ?? '';

   $sql="SELECT id FROM users WHERE username='$un' and password='$pw'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

   $count=mysqli_num_rows($result);

   if($count==1)
   {
    $_SESSION['user'] = $un;
    $_SESSION['email'] = $pw;
    header("location:profile.php");
   }
   else 
   {
    echo "Incorrect username and password";
    require "login.html";
   }
}



?>