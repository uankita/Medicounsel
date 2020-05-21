<?php
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $op;
$cp=$_POST['cp'];
//echo $op;
session_start();
$email=$_SESSION['user'];
//echo $email;
include("connection.php");
$query="select * from tbl_pat where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$pp=$row['password'];
}


if($pp==$op)
{
  if($op==$np)
  {
	  echo "old and new are same"; 
	}
		else if($np==$cp)
	  {
		  $query="update tbl_pat set password='$np' where email='$email'";
		  mysql_query($query);
		  session_destroy();
		  die("your password has been changed.<a href='login.php'>RETURN </a>to the login page");
		 // header("location:login.php");
	  }
  else
  {
	  echo "new and confirm password are not same";
	  //header("location:pat_password.php");
	  
  }
  	  

}
else
{
	echo "old password are not same";
	//header("location:pat_password.php");
	
}

?>
