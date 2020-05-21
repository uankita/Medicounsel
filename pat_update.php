<?php
session_start();
$email=$_SESSION['user'];
echo $email;
$name=$_POST['name'];
$fname=$_POST['fname'];
$mobile=$_POST['mobile'];

$gender=$_POST['gender'];
$dob=$_POST['dob'];

include("connection.php");

 $query="update tbl_pat set name='$name',fname='$fname',mobile='$mobile',gender='$gender',dob='$dob' where email='$email'";
mysql_query($query);
header("location:pat_profile.php");
?>