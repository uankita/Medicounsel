<?php
session_start();
$username=$_POST['username'];
echo $email;
$password=$_POST['password'];
echo $password;
include("connection.php");
$query="select * from admin where username='$username'and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
$SESSION['user']=$username;
header("location:admin_profile.php");	
}
else
{
	header("location:index.php");
	
}
?>