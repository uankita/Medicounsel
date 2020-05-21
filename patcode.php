<?php
$name=$_POST['name'];
echo $name;
$fname=$_POST['fname'];
echo $fname;
$mobile=$_POST['mobile'];
echo $mobile;
$email=$_POST['email'];
echo $email;
$password=$_POST['password'];
echo $password;
$age=$_POST['age'];
echo $age;
$gender=$_POST['a'];
echo $gender;
$dob=$_POST['dob'];
echo $dob;
mysql_connect('localhost','root','');
mysql_select_db("medicounsel");
$query="insert into tbl_pat(name,fname,mobile,email,password,age,gender,dob) values('$name','$fname','$mobile','$email','$password','$age','$gender','$dob')";

$res=mysql_query($query);

header("location:login.php");
?>