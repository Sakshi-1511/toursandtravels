<?php
session_start();

// initializing variables
$username = "";
$password = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '' , 'tours&travels');



// LOGIN USER
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
   $email = mysqli_real_escape_string($db, $_POST['email']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (empty($email)) {
    array_push($errors, "email is required");
  }
  $sql="SELECT * from admin WHERE Username = '$username' AND Email='$email' AND Password ='$password' ";
  $que = mysqli_query($db,$sql);
  if(mysqli_num_rows($que)>0)
  {
    echo "<script >alert('login ok')</script>";
    echo "<script >window.open('../admin/index.html')</script>";

  }
  else
  {
     echo "<script >alert('login denied')</script>";
  }

}

?>