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
include("connection.php");
$query="select * from tbl_pat order by pat_id ";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<center style=color:white;><h1>***PATIENT LIST***</h1></center>
<br/><br/><table align="center" border="1" style=color:white;>
<tr>
<th>S.NO</th>
<th>NAME</th>
<th>F'NAME</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>AGE</th>
<th>GENDER</th>
<th>DOB</th>
<th>DELETE</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><a href="pat_delete.php?pat_id=<?php echo $row['pat_id'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>

</div>


<div id="foot">
           <div id="foot1">
		              <div id="foot11">
					  <center style=color:white;><h2>YOUR VISIT</h2>
					  <h4>Appoinments</h4>
					  <h4>Billing and Insurance</h4>
					  <h4>Find a Doctor</h4>
					  <h4>Maps and Directions</h4></center>
					  </div>
					  <div id="foot12">
					  <center style=color:white;><h2>GET INVOLVED</h2>
					  <h4>Appoinments</h4>
					  <h4>Billing and Insurance</h4>
					  <h4>Find a Doctor</h4>
					  <h4>Maps and Directions</h4></center>
					  </div>
					  <div id="foot13">
					  <center style=color:white;><h2>Health Solutions</h2>
					  <h4>Appoinments</h4>
					  <h4>Billing and Insurance</h4>
					  <h4>Find a Doctor</h4>
					  <h4>Maps and Directions</h4></center>
					  </div>
					  <div id="foot14">
					  <center style=color:white;><h2>CONTACT INFO</h2>
					  <h4>Purana chauk,hafizpur</h4>
					  <h4>thandi mandi</h4>
					  <h4>Azamgarh,Uttar Pradesh</h4>
					  <h4>+918737918174</h4>
					  <h4><a href="#" color="red">golu@gmail.com</a></h4></center>
					  </div>
					  </div>
		   <div id="foot2">
		  <CENTER style=color:white> <h3>© 2016 Infirmary. All rights reserved | Design by RITESH UPADHYAY 'GOLU'</h3></CENTER>
		   </div>
		   </div>
 

			   </body>
			   </html>
