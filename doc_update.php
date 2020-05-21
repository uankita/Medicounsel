<?php
session_start();
$email=$_SESSION['user'];
echo $email;
$name=$_POST['name'];
echo $name;
$fname=$_POST['fname'];
echo $fname;
$mobile=$_POST['mobile'];
echo $mobile;
$age=$_POST['age'];
echo $age;
$gender=$_POST['gender'];
echo $gender;
$dob=$_POST['dob'];
echo $dob;
$speciality=$_POST['speciality'];
echo $speciality;
$fees=$_POST['fees'];
echo $fees;
$timing=$_POST['timing'];
echo $timing;
$address=$_POST['address'];
echo $address;
include("connection.php");
echo $query="update tbl_doc set name='$name',fname='$fname',mobile='$mobile', age='$age',gender='$gender',dob='$dob',speciality='$speciality',fees='$fees',timing='$timing',address='$address' where email='$email'";

mysql_query($query);
header("location:doc_profile.php");
?>