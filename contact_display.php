<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

include("connection.php");

$query="Insert to contactus (name,email,mobile,message date_time) values ('$name','$email','$mobile','$message',now())";     
$res=mysql_query($query);
echo $res;

header("location:contact_display.php");
?>