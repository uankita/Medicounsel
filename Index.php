<?php

?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet"/>                                                                                               
<script>
var arr=["s4.jpg","s2.jpg","s3.jpg","s5.jpg"];
var i=0;
function slider1()
{
var imgslide=document.getElementById("slider");
imgslide.style.backgroundImage="url('images/"+arr[i]+"')";
i++;
if(i==arr.length)
{
i=0;
}
window.setTimeout("slider1()",2500);
}
</script>
<style>

</style>
</head>
<body onload="slider1()">

<header>
<div id="main">
       <div id="main1">
	    <div id="main1a">
		
		</div>
		<div class="main1b">
		<center>
		<table>
		<tr><td><img src="images\h.jpg"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<b>+919793234005</b></td></tr></table></center>
		</div>
		<div class="main1b">
		<center>
		<table>
		<tr><td><img src="images\hm.jpg"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="gmail\hrai@gmail.com"><b>golu@gmail.com</b></a></td></tr></table></center>
		</div>
		<div id="main1c">
		<ul style="text-align:right margin-top:30px;">
		<li><a href="login.php">LOGIN</a></li>
		<li><a href="doc_register.php">SIGNUP D</a></li>
		<li><a href="pat_register.php">SIGNUP P</a></li>
		</ul>
		</div>
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

       
       <div id="slider">
	   </div>
       <div id="book">
	             <div id="book1">
	                   <div id="bookl"></div>
					   <div id="bookr"><img src="images/pic1.jpg" height="400px" width="400px"></div>
				 </div>
	   	   <div id="book2">
		   <h1>Welcome To Medicounsel</h1>
				<ul>
					<li><a href="#"><h3>Accusantium Doloremque Accus</h3></a></li>
					<li><a href="#"><h3>Molestiae Consequatur Molestiae</h3></a></li>
					<li><a href="#"><h3>Nostrum Exercitationem Nostrum</h3></a></li>
					<li><a href="#"><h3>Consequuntur Magnidolor Nostrum</h3></a></li>
					<li><a href="#"><h3>Molestiae Consequatur Molestiae</h3></a></li>
					<li><a href="#"><h3>Nostrum Exercitationem Nostrum</h3></a></li>
					<li><a href="#"><h3>Consequuntur Magnidolor Nostrum</h3></a></li>
				</ul>
		   </div>
		   	   <div id="book3">
             <center> <img src="images/12.jpg" height="400px" width="350px"></center>
			   </div>
	   </div>
       <div id="black">
	                <div id="b1"></div>
					<div id="b2">
					  <div id="b21"><br/><br/><br/>
					  <h1 align="center" style="color:#0099ff;">OuR BeSt SeRvIcEs</h1>
					  <h3 align="center" style="color:white;">At vero eos at accusamus
					  et iusto odio dignissimosducimus qui blanditiis praesantium
					  voluptatum delenique corrupti quos dolores et quas molestias
					  excepturi sintoccaeacti cupiditate non provident,similique sunt.</h3><br/><br/>
					  <center><button id="btn"><a href="about.html" style=" text-decoration:none;" >See more about us </a></button></center><br/><br/><br/>
					  <h3  align="center" style="color:white;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur ant odit aut fugit,
					  sed quia consequuntur magni dolores eos qui </h3>
					  <h2 style="color:#99c2ff;"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp; -Alia Smith</p></h2>
					  </div>
					  <div id="b22">
					  <div id="b221">
					  					  <div id="b221l">
										  <center style="padding-top:20px;"><td>&nbsp;&nbsp;&nbsp;<img src="images/clinic.png"></td></center>
										  <h1 align="center" style="color:#0099ff;">Voluptatem</h1>
										  <h3 align="center" style="color:white;">At vero eos at accusamus
					                      et iusto odio dignissimosducimus qui blanditiis praesantium
					                      voluptatum delenique corrupti quos dolores et quas molestias
					                      excepturi sintoccaeacti cupiditate non provident,similique sunt.</h3>
										  </div>
										  <div id="b221r">
									      <center style="padding-top:20px;"><td>&nbsp;&nbsp;&nbsp;<img src="images/clinic.png"></td></center>
										  <h1 align="center" style="color:#0099ff;">Voluptatem</h1>
										  <h3 align="center" style="color:white;">At vero eos at accusamus
					                      et iusto odio dignissimosducimus qui blanditiis praesantium
					                      voluptatum delenique corrupti quos dolores et quas molestias
					                      excepturi sintoccaeacti cupiditate non provident,similique sunt.</h3>
										  </div>
					  </div>
					  <div id="b222">
					                      <div id="b222l">
								          <center style="padding-top:20px;"><td>&nbsp;&nbsp;&nbsp;<img src="images/clinic.png"></td></center>
										  <h1 align="center" style="color:#0099ff;">Voluptatem</h1>
										  <h3 align="center" style="color:white;">At vero eos at accusamus
					                      et iusto odio dignissimosducimus qui blanditiis praesantium
					                      voluptatum delenique corrupti quos dolores et quas molestias
					                      excepturi sintoccaeacti cupiditate non provident,similique sunt.</h3>
										  </div>
										  <div id="b222r">
										  <center style="padding-top:20px;"><td>&nbsp;&nbsp;&nbsp;<img src="images/clinic.png"></td></center>
										  <h1 align="center" style="color:#0099ff;">Voluptatem</h1>
										  <h3 align="center" style="color:white;">At vero eos at accusamus
					                      et iusto odio dignissimosducimus qui blanditiis praesantium
					                      voluptatum delenique corrupti quos dolores et quas molestias
					                      excepturi sintoccaeacti cupiditate non provident,similique sunt.</h3>
										  </div>
					  </div>
					  </div>
					</div>
					<div id="b3"></div>
	   </div>
       <div id="team">
                      <div id="team1">
		              </div>
					  <div id="team2">
                                  <div id="team21">
								  <center style="font-size:40px; color:#0099ff;padding-top:50px;">MEET OUR TEAM<br/></center>
								  </div>
								  <div id="team22">
								  <div id="team22l">
													<div id="team22la">				 
													<img src="images/pic4.jpg"height="350px" width="345px" align="center">
													</div>								 
													<div id="team22lb">
													<center><span style="font-size:30px;color:orange;padding-top:40px;">Dr.Archana</span><br/><h3>Dental Surgeon</h3></center>
													</div>				  
								  </div>
								  <div id="team22m">
												<div id="team22ma">
												<img src="images/pic5.jpg"height="350px" width="345px" align="center">
												</div>								 
													<div id="team22mb">
													<center><span style="font-size:30px;color:orange;padding-top:40px;">Dr.Ritesh</span><br/><h3>Cardiology</h3></center>
													</div>
								  </div>
								  <div id="team22r">
												<div id="team22ra">
												<img src="images/pic6.jpg"height="350px" width="345px" align="center">
												</div>								 
													<div id="team22rb">
													<center><span style="font-size:30px;color:orange;padding-top:40px;">Dr.Shivangi</span><br/><h3>Neurology</h3></center>
													</div>
								  </div>
								  </div>
					  </div>
					  <div id="team3">
		              </div>
		              </div>
	   </div>
       <div id="capacity">
         <div id="capacity1">
		 
		 <center style="font-size:40px;color:#0099ff;padding-top:50px;">CAPABILITIES</center>
		 </div>
		  <div id="capacity2">
		         <div class="circle">
				 <img src="images\g8.jpg">
				 </div>
				 <div class="circle">
				  <img src="images\heart.jpg">
				 </div>
				 <div class="circle">
				  <img src="images\8.jpg">
				 </div>
				 <div class="circle">
				  <img src="images\x.jpg">
				 </div>
		   
		  </div>
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