<?php  
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

$username= filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$phone = filter_input(INPUT_POST, 'phone');

if (!empty($name)) 
{
  if (!empty($email)) 
  {
    if(!empty($username))
    {
      if (!empty($password))
       {
        if(!empty($address))
        {
           if(!empty($phone))
        {



      
      $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tours&travels";
    // connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()) {
      die('Connect Error ('.
        mysqli_connect_errno().')' 
        .mysqli_connect_error());
                          }
      else
          {
      $sql = "INSERT INTO signup(Name,Email,Username,Password,Address,Phone) values ('$name','$email','$username',
        '$password','$address','$phone')";
      if ($conn->query($sql)) 
      {
      
        echo '<script >alert("Data is Successfully stored");window.location="../login-form-06/index.php"</script>';
      }
      else
      {
        echo "Error: ". $sql . "<br>" 
        .$conn->error;
      }
      $conn->close();

          }

    }
     else
   {
        echo '<script >alert("Phone should not be empty."");window.location="index.php"</script>';
    die();
   }


  }
   else
   {
        echo '<script >alert("Address should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else{
        echo '<script >alert( "Password should not be empty."");window.location="index.php"</script>';
  die();

}}
else{
        echo '<script >alert( "Username should not be empty."");window.location="index.php"</script>';
  die();}}
  else{
        echo '<script >alert( "Email should not be empty."");window.location="index.php"</script>';
  die();}}
    else{
        echo '<script >alert( "Name should not be empty."");window.location="index.php"</script>';
  die();}



    



?>