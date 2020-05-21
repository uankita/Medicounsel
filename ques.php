<?php
session_start();
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['user'];

include("connection.php");
$query="select * from tbl_pat where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
$user_id=$row['pat_id'];	
}

$query2="insert into question (question,pat_id,date_time) values('$ques','$user_id',now())";
mysql_query($query2);
header("location:discuss.php");



?>