<?php  
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone= filter_input(INPUT_POST, 'phone');
$city = filter_input(INPUT_POST, 'city');
$date = filter_input(INPUT_POST, 'date');
$adults = filter_input(INPUT_POST, 'adults');
$kids= filter_input(INPUT_POST, 'kids');
$category = filter_input(INPUT_POST, 'category');
$message = filter_input(INPUT_POST, 'message');


if (!empty($name)) 
{
  if (!empty($email)) 
  {
    if(!empty($phone))
    {
      if (!empty($city))
       {
        if(!empty($date))
        {
           if(!empty($adults))
        {

           if(!empty($kids))
        {

           if(!empty($category))
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
      $sql = "INSERT INTO enquiry(Name,Email,Phone,City,Date_Of_Travel,Adults,Kids,Category,Message) values ('$name','$email','$phone','$city','$date','$adults','$kids','$category','$message')";
      if ($conn->query($sql)) 
      {
      
        echo '<script >alert("Data is Successfully stored");window.location="../index.php"</script>';
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
        echo '<script >alert("category should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else
   {
        echo '<script >alert("kids should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else
   {
        echo '<script >alert("Adults should not be empty."");window.location="index.php"</script>';
    die();
    }
}
   else
   {
        echo '<script >alert("Date of travel should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else{
        echo '<script >alert( "City should not be empty."");window.location="index.php"</script>';
  die();

}}
else{
        echo '<script >alert( "Phone should not be empty."");window.location="index.php"</script>';
  die();}}
  else{
        echo '<script >alert( "Email should not be empty."");window.location="index.php"</script>';
  die();}}
    else{
        echo '<script >alert( "Name should not be empty."");window.location="index.php"</script>';
  die();}

?>