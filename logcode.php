<?php
include('connection.php');
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
$dept=$_POST['department'];
echo $dept;
if($dept=='Patient')
{
mysql_connect('localhost','root','');
mysql_select_db("medicounsel");
$query="select * from tbl_pat where email='$email' && password='$password'";

$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))

{
	$_SESSION['user']=$email;
	header("location:pat_profile.php");
}
else
{
header("location:login.php");
}
}
if($dept=='Doctor')
{
	mysql_connect('localhost','root','');
mysql_select_db("medicounsel");
$query="select * from tbl_doc where email='$email' && password='$password'";

$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))

{
	$_SESSION['user']=$email;
	header("location:doc_profile.php");
}
else
{
header("location:login.php");
}
}
?>