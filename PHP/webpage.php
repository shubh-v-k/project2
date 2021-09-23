<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="customers";

$conn=mysqli_connect($server_name,$username,%password,$database_name);
if(!$conn)
{
     die("Connection Failed:" .mysqli_connect_error());
}
if(isset($_POST['save']))
{
   $name = $POST['name'];
   $email = $POST['email'];
   $phone = $POST['phone'];
   $message = $POST['message'];
    
   $sql_query = "INSERT INTO clients(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
   if(mysqli_query($conn, $sql_query))
{
   echo "New Record inserted succesfully!";
}
  else
{
  echo "Error:" . $mysqli_error($conn);
}
 mysqli_close($conn);
}
?>
    