
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>


<html>
	<head>
		<title>contact</title>
		<link rel="stylesheet" type="text/css" href="inn.css"/>
	</head>
	
	<body>
		<div class="toplink"></div>
		<div class="main">
			<div class="header"> 
				<div class="imgdesign">
					<img src="logo.jpg" alt="Logo" width="50%" ></img>
				</div>
				<div class="linkhyper" align="right" >
				<ul id="menu" ></br>
					<b><a href="home.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="about.php"  class="headertext" > ABOUT US</a></b> &nbsp&nbsp&nbsp
					   <b><a href="profile.php" class="headertext" >PROFILE</a></b>&nbsp&nbsp&nbsp
				       <b><a href="user_cat.php" class="headertext">OUR PRODUCTS</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACTUs</a></b>&nbsp&nbsp&nbsp
					</ul> 
				</div>
			</div>
			<div class="content">
			    <div class="midcontent">
					
					<div class="ttopcontent">
					<?php
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='1%' width='100%' ></img></td>
					
		</tr>
			";
	}
?>		
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
										<td><b>Sample Image</td>
													
										<td class="tableTD"><input type="file" name="image1" accept="image/gif, image/jpeg, image/png"></td>
													
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
					
					<!--<div class="bottomcontent"></br>
					    </br>
						</br>
					    
						    <Div class="maincontentRightDivisionContact" align="center">
						      <img src="../Imagee\telephone.jpg" alt="Logo" align="center;" height="35%" width="90%" ></img>
								</br>
								

						    </div>  	
					</div>-->
		        </div>
				<div class="footer" align="right">
						<code >&copy;HanzalaExports. All right reserved.</code>
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
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$sql="insert into `contact`(name,company,email,website,contact,enquiry,image1)values('$name','$company','$email','$website','$contact','$enquiry','$image1')";
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





