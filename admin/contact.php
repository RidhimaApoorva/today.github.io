<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>
<html>
	<head>
		<title>contact</title>
		<link rel="stylesheet" type="text/css" href="../css/serve.css"/>
	</head>
	
	<body>
		<div class="toplink"></div>
		<div class="main">
			
			<div class="header">
				<div class="imgdesign">
					<img src="../Imagee\logo.png" alt="Logo"></img>
				</div>
				<div class="linkhyper" align="right" >
					<ul id="menu" >
						<b><a href="index_user.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="serve_user.php"  class="headertext" > SERVICES</a></b> &nbsp&nbsp&nbsp
					   <b><a href="productuser.php" class="headertext" >WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACT</a></b>
						
					</ul> 
				</div>
			</div>
			
			
			<div class="content">
			    <div class="midcontent">
					
					<div class="ttopcontent">
					      <p class="headLine1" ><p style="color:black; font-size:2.9em;">Contact Us</p></p>
						  <br>
							<form method="POST" action="" name="form" enctype="multipart/form-data">
					
								<legend color:"black" >Items in <b>BOLD</b> are required</legend>
									<table>
									<p align="center" style="font-size:1.4em"></p>
									<p><tr>
										<td><b> Name:<b/></td>
										<td class="tableTD"><Input type="text" name="name" style=" width:190%" ></td>
									</tr>
									<tr>
										<td><b> Company:<b/></td>
										<td class="tableTD"><Input type="text" name="company" style=" width:190%" ></td>
									</tr>
									<tr>
										<td><b> Email:<b/></td>
										<td class="tableTD"><Input type="text" name="email" style=" width:190%" ></td>
									</tr>
									<tr>
										<td><b> Website:<b/></td>
										<td class="tableTD"><Input type="text" name="website" style=" width:190%" ></td>
									</tr>
									<tr>
										<td><b> Contact:<b/></td>
										<td class="tableTD"><Input type="text" name="contact" style=" width:190%" ></td>
									</tr>
									<tr>
										<td><b>Your Enquiry:<b/></td>
										<td class="tableTD"><textarea name="enquiry" rows="10"style="width:190%"></textarea></td>
										
									</tr>
									</table></br>
									<center>
										<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
									</center>	</p>
							</form>
					</div>
					
					<div class="bottomcontent"></br>
					    </br>
						</br>
					    <p> <h3> &nbsp &nbsp  GET IN TOUCH</h3></P>
						    <Div class="maincontentRightDivisionContact" align="center">
						      <img src="../Imagee\telephone.jpg" alt="Logo" align="center;" height="35%" width="90%" ></img>
								</br>
								
								<div class="rightdivisionBolg" align="center">
									<p align="Left">
									Our support staff will surely get back to you within 24Hrs.
									</p> 
									
									<p align="left" style="font-size:12.8px;" ><u>Alternatively  you can also reach us</u>
									<u>Sales@leatherhub.info.com</u>
									</p>
									<h4 align="left">You can also call us at:</h4>
									<p align="left"> +91 54745745454  <br/>+91 7673647737  <br/>+91 76734675</p>
									  <p align ="left">for any urgent queries.</p> 
									    <p align ="left">You can visit us at :</p>
									   <p align= "left">	277/259, Dargah Sharif Jajmau Kanpur - 208010<br />
										UP, INDIA</p>
								</div>
						    </div>  	
					</div>
		        </div>
				<div class="footer" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
				</div>
				
			</div>
		
		</div>
	</body>
</html>
<?php
//this code for insert the image in database

if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$contact=$_POST['contact'];
	$enquiry=$_POST['enquiry'];
	
	$sql="insert into `contact`(name,company,email,website,contact,enquiry)values('$name','$company','$email','$website','$contact','$enquiry')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('contact.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('admin_contact.php','_self')</script>";
	} 
}

?>





