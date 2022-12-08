<?php
session_start();

// initializing variables
$username = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '' , 'tours&travels');



// LOGIN USER
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  $sql="SELECT * from signup WHERE Username = '$username' AND Password ='$password'";
  $que = mysqli_query($db,$sql);
  if(mysqli_num_rows($que)>0)
  {
    echo "<script >alert('login ok')</script>";
    echo "<script >window.open('../category.php')</script>";

  }
  else
  {
     echo "<script >alert('login denied')</script>";
  }

}

?>