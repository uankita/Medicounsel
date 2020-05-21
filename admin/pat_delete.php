<?php
$pat_id=$_REQUEST['pat_id'];
//echo $pat_id;
include("connection.php");
$query="delete from tbl_pat where pat_id='$pat_id'";
mysql_query($query);
header("location:pat_display.php");
?>