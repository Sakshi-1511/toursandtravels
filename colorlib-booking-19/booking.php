<?php  
$flying = filter_input(INPUT_POST, 'flying');
$to = filter_input(INPUT_POST, 'to');
$departing= filter_input(INPUT_POST, 'departing');
$returning = filter_input(INPUT_POST, 'returning');
$adults = filter_input(INPUT_POST, 'adults');
$children= filter_input(INPUT_POST, 'children');
$payment = filter_input(INPUT_POST, 'payment');
$email = filter_input(INPUT_POST, 'email');
$category = filter_input(INPUT_POST, 'category');


if (!empty($flying)) 
{
  if (!empty($to)) 
  {
    if(!empty($departing))
    {
      if (!empty($returning))
       {
        if(!empty($adults))
        {
           if(!empty($children))
        {

           if(!empty($payment))
        {

           if(!empty($email))
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
      $sql = "INSERT INTO booking(Source,Destination,D_date,R_date,Adults,Kids,Payment,Email,Category) values ('$flying','$to','$departing','$returning','$adults','$children','$payment','$email','$category')";
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
        echo '<script >alert("email should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else
   {
        echo '<script >alert("payment method should not be empty."");window.location="index.php"</script>';
    die();
    }
}
   else
   {
        echo '<script >alert("this field should not be empty."");window.location="index.php"</script>';
    die();
    }
}
else{
        echo '<script >alert( "this field should not be empty."");window.location="index.php"</script>';
  die();

}}
else{
        echo '<script >alert( "date of return should not be empty."");window.location="index.php"</script>';
  die();}}
  else{
        echo '<script >alert( "departure date should not be empty."");window.location="index.php"</script>';
  die();}}
   else{
        echo '<script >alert( "destination city should not be empty."");window.location="index.php"</script>';
  die();}}
    else{
        echo '<script >alert( "source city should not be empty."");window.location="index.php"</script>';
  die();}

?>