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
$query="select * from question";
$res=mysql_query($query);
?>
<form action="ques.php" method="post">
           <br/><center style=color:white;><h1>***ASK SOMETHING***</h1></center> 
           <center><textarea name="ques"></textarea></center><br/><br/>
           <center style=color:white;><input type="submit" value="Add"/></center><br/><BR/><br/><br/>
</form>
<table border="2" cellpadding="8px" align="center"  style=color:white;>
<tr>
<th>S.NO</th>
<th>QUESTION</th>
<th>POST</th>
<th>VIEW</th>
</tr>
<?php
while($row=mysql_fetch_assoc($res))
{
	?>
<tr>

<td><?php echo $row['ques_id'];?></td>
<td><?php echo $row['question'];?></td>
<td><a href="post.php?id=<?php echo $row['ques_id'];?>">post</a></td>
<td><a href="view.php?id=<?php echo $row['ques_id'];?>">view</a></td>
</tr>
<?php
}
?>





</tr>
</table>


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
