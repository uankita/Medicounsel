<?php
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $op;
$cp=$_POST['cp'];
//echo $op;
session_start();
$username=$_SESSION['username'];
//echo $email;
include("connection.php");
$query="select * from admin where username='$username'";
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
		  $query="update admin set password='$np' where username='$username'";
		  mysql_query($query);
		  session_destroy();
		  die("your password has been changed.<a href='index.php'>RETURN </a>to the index page");
		  
	  }
  else
  {
	  echo "new and confirm password are not same";
	  
	  
  }
  	  

}
else
{
	echo "old password are not same";

	
}

?>
