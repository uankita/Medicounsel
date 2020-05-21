<?php

?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<header>
<div id="main">
       <div id="main1">
	   
	   </div>
    <div id="main2">
	   <div id="main2a">
	   <div id="main2al">
	  <img src="images\5.jpg" height="100px" width="150px" align="center">
	  </div>
	  <div id="main2ar">
	  <h1><a class="link link--nukun" style="text-decoration:none;color:white" href="index.html"><span style="margin-left:60px;margin-top:80px;color:#0099ff">MEDI<span>C</span>OUNCEL</span></a></h1>
	   </div>
	   </div>
	   <div id="main2b">
	    <ul style="text-align:right;text-decoration:none;">
		<li><a href="index.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="gallery.php">GALLERY</a></li>
		<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	   </div>
	</div>
</div>
</header>

<div id="table">
<?php
$speciality=$_POST['speciality'];
//echo $speciality;
include("connection.php");
$query="select * from tbl_doc where speciality='$speciality'";
$res=mysql_query($query);

?>
<html>
<head>
</head>
<body>
<br/><br/><center><h1 style=color:white;>***AVIAILABLE DOCTOR***</h1></center><BR/><br/>
<table align="center" border="1" style=color:white;>
<tr>
<th>id</th>
<th>name</th>
<th>fname</th>
<th>mobile</th>
<th>address</th>
<th>age</th>
<th>gender</th>
<th>speciality</th>
<th>timing</th>
<th>fees</th>
<th>booking</th>
</tr>
<?php
while($row=mysql_fetch_assoc($res))
{
?>	


<tr>
<td><?php echo $row['doc_id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['speciality'];?></td>
<td><?php echo $row['timing'];?></td>
<td><?php echo $row['fees'];?></td>	
<td><a href="book.php?id=<?php echo $row['doc_id'];?>"/>BOOK AN APPOINMENT </a></td>
</tr>
<?php
}
?>
</body>
</html>
</div>

			   </body>
			   </html>
