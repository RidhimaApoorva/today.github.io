

<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>

 <html>
	<head>
		<title>........ADMIN.....</title>
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
				       <b><a href="index_user.php" class="headertext ">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="Serve.html" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp 
					   
					   <b><a href="er.html" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
			
			   

					
									
									
									
			    <div class="MainContent"> </br>
				
								<div class="ttoplinks" ></div>
								
								<div>
								    
									<?php
						
							if(isset($_GET['id']))
							{
								$id=($_GET['id']);
								$sql="select * from `index` where id=$id";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									$id=$row['id'];
									$image1=$row['image1'];
									$cname=$row['cname'];
								echo "	
								<tr>
									<td>Name:&nbsp &nbsp<Input type='text' name='cname' value='' placeholder='$cname'/></td>
								</tr>
								<tr>
									<td> Image:&nbsp &nbsp<img src='image/$image1' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='image1'/></td>
								</tr>
								<tr>
									<td>
										<input type='submit' name='send' value='send'/>
									</td>		
								</tr>
									"; 
								}
							} 
					?>			
				
									
								</div>
								
							<div class ="subcontent" align ="center" display="float">
								
										<div class="maincontentText" align="left" display="float">
												<div class="maincontentTextLeft" >
												<form method="POST" action="" name="form" enctype="multipart/form-data">
					
					<legend color:"#606060;" >Items in <b>BOLD</b> are required</legend>
						<table>
						<p align="center" style="font-size:1.4em"> Create Index Page</p>
						<tr>
							<td><b> Image Name:<b/></td>
							<td class="tableTD"><Input type="text" name="cname" style=" width:90%" ></td>
							</tr>
							<tr>
							<td><b> Image1</td>
							<td class="tableTD"><input type="file" name="image1" ></td>
						</tr>
						<td><b> Image2</td>
							<td class="tableTD"><input type="file" name="image2" ></td>
						</tr>
						<td><b> Image3</td>
							<td class="tableTD"><input type="file" name="image3" ></td>
						</tr>
						</table></br>
						<center>
							<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
						</center>
										
				</form>
																 
																 <hr class="hrRule" ;>
														
												</div>
												
											
								
										<div class="maincontentTextRight" align ="Right">
												 
											
											<form name="formname" method="GET" action="">
			
			<table>
				
 
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
	$cname=$_POST['cname'];
	
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$image2=$_FILES['image2']['name']; //for image
	$image2_tmp=$_FILES['image2']['tmp_name']; //for temp
	$image3=$_FILES['image3']['name']; //for image
	$image3_tmp=$_FILES['image3']['tmp_name']; //for temp
	
	$sql="update `index` SET (cname,image1,image2,image3)values('$cname','$image1','$image2','$image3') where id=$id";
	/*$edit = "update `category` SET `cname`='$cname',`filename`='$filename' WHERE id=$id "; */
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('index_user.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('admin_index.php','_self')</script>";
	} 
}
@move_uploaded_file($image1_tmp,"image/$image1"); //for uploaded the image
@move_uploaded_file($image2_tmp,"image/$image2"); //for uploaded the image
@move_uploaded_file($image3_tmp,"image/$image3"); //for uploaded the image
?>


