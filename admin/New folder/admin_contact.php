

<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>

 <html>
	<head>
		<title>........ADMIN_Contact.....</title>
		<link rel="stylesheet" type="text/css" href="../css/inn.css"/>
	</head>
	
	<body>
		<div class="toplink"></div>
		<div class="main">
		      
			  
			
			<div class="header"> 
			     
				<div class="imgdesign">
					<img src="../Imagee\logo.png" alt="Logo" ></img>
				</div>
				<div class="linkhyper" align="right" >
					<ul id="menu" ></br>
				       <b><a href="admin_index.php" class="headertext ">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="admin_serve.php" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp 
					   
					   <b><a href="admin_work.php" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="admin_contact.php" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			    <div class="MainContent"> </br>
				
								<div class="ttoplinks" ></div>
								
								<div
								</div>
								
							<div class ="subcontent" align ="center" display="float">
								
										<div class="maincontentText" align="left" display="float">
												<div class="maincontentTextLeft" >
												<form method="POST" action="" name="form" enctype="multipart/form-data">
					
					<legend color:"black" >Items in <b>BOLD</b> are required</legend>
						<table>
						<p align="center" style="font-size:1.4em"> Contact Us</p>
						<tr>
							<td><b> Name:<b/></td>
							<td class="tableTD"><Input type="text" name="name" style=" width:90%" ></td>
						</tr>
						<tr>
							<td><b> Company:<b/></td>
							<td class="tableTD"><Input type="text" name="company" style=" width:90%" ></td>
						</tr>
						<tr>
							<td><b> Email:<b/></td>
							<td class="tableTD"><Input type="text" name="email" style=" width:90%" ></td>
						</tr>
						<tr>
							<td><b> Website:<b/></td>
							<td class="tableTD"><Input type="text" name="website" style=" width:90%" ></td>
						</tr>
						<tr>
							<td><b> Contact:<b/></td>
							<td class="tableTD"><Input type="text" name="contact" style=" width:90%" ></td>
						</tr>
						<tr>
							<td><b>Your Enquiry:<b/></td>
							<td class="tableTD"><Input type="text" name="enquiry" style=" width:90%" ></td>
						</tr>
						</table></br>
						<center>
							<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
						</center>
										
				</form>
																 
																 <hr class="hrRule" ;>
														
												</div>
												
											
								
										<div class="maincontentTextRight" align ="Right">
												
											<Div class="contentRightDivision" align="center">
											<form name="formname" method="GET" action="">
			
			<table>
				<tr>
					
				</tr>

 <?php
 //dis cde for display the image
	$result="select * FROM `contact` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		
		$name=$row['name'];
		$company=$row['company'];
		$email=$row['email'];
		$contact=$row['contact'];
		$website=$row['website'];
		$enquiry=$row['enquiry'];
		$id=$row['id'];
		echo "	
		<tr>
			<td>$name</td>
			<td>$company</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$website</td>
			<td>$enquiry</td>
			<td><a href='index_edit.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='delete.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
		</tr>
			";
	}
	
?>						
			</table> 
			</form>
												 
											</Div>
										</div>
									
						
								</div>
				  
					
						   
                          
                         
				  
				
				  
							</div>
		        
				    
				
			    </div>
				<div class="foot" align="RIght">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
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
@move_uploaded_file($image1_tmp,"image/$image1"); //for uploaded the image
@move_uploaded_file($image2_tmp,"image/$image2"); //for uploaded the image
@move_uploaded_file($image3_tmp,"image/$image3"); //for uploaded the image
?>



