<?php
session_start();
$ans=$_POST['ans'];
//echo $ans;
$ques_id=$_POST['ques_id'];
$email=$_SESSION['user'];

include("connection.php");
$query="select * from tbl_pat where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
$user_id=$row['id'];	
}

$query2="insert into answer(ques_id,id,answer,date_time) values('$ques_id','$user_id','$ans',now())";
mysql_query($query2);
header("location:discuss.php");
?>