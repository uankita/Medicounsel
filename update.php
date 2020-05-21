<?php
$pat_id=$_POST['pat_id'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['a'];
$dob=$_POST['dob'];

include("connection.php");

$query="update tbl_pat set name='$name',fname='$fname',mobile='$mobile',email='$email',password='$password',gender='$gender',dob=$dob, where pat_id='$pat_id'";
mysql_query($query);