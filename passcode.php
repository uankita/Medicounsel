<?php
session_start();
$email=$_SESSION['email'];
//echo $password;
include("connection.php");
$query="select * from tbl_doc where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['password'];
}
$op=$_POST['op'];
echo $op;
$np=$_POST['np'];
echo $op;
$cp=$_POST['cp'];
echo $op;





if($pp==$op)
{
  if($np==$cp)
  {
	  if($pp==$np)
	  {
		  $query="update tbl_doctor set password='$np' where email='$email'";
		  mysql_query($query);
		  session_destroy();
		  header("location:login.php");
	  }
  else
  {
	  header("location:doc_password.php");
	  
  }
  }	  
	else
	{
		header("location:doc_password.php");
		
	}
}
else
{
	header("location:doc_password.php");
	
}
?>
