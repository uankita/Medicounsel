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
$speciality=$_POST['speciality'];
echo $speciality;
$fees=$_POST['fees'];
echo $fees;
$timing=$_POST['timing'];
echo $timing;
$address=$_POST['address'];
echo $address;
mysql_connect('localhost','root','');
mysql_select_db("medicounsel");
$query="insert into tbl_doc(name,fname,mobile,email,password,age,gender,dob,speciality,fees,timing,address) 
values('$name','$fname','$mobile','$email','$password','$age','$gender','$dob','$speciality','$fees','$timing','$address')";

$res=mysql_query($query);

header("location:login.php");

?>