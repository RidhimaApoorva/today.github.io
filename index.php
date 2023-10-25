

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
				       <b><a href="admin_index.php" class="headertext ">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="admin_serve.php" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp 
					   <b><a href="productuser.php" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   
					</ul> 
				</div>
			</div>
			
			
			
			   

					
									
									
									
			    <div class="MainContent"> </br>
				
								<div class="ttoplinks" ></div>
								
								<div>
								    
									
				
									
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
												 <H2 align="left">&nbsp &nbsp &nbsp Recent Work</H2></br>
											<Div class="contentRightDivision" align="center">
											<form name="formname" method="GET" action="">
			
			<table>
				<tr>
					<th> Image1</th>
					<th> Image2</th>
					<th> Image3</th>
					<th>Image4</th>
					<th> Name</th>
					<th> Edit </th>
					<th>Delete</th>
				</tr>

 <?php
 //dis cde for display the image
	$result="select * FROM `index` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		$image2=$row['image2'];
		$image3=$row['image3'];
		$cname=$row['cname'];
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='30%' width='60%'></img></td>
			<td><img src='image/$image2' max-height='30%' width='60%'></img></td>
			<td><img src='image/$image3' max-height='30%' width='60%'></img></td>
			<td>$cname</td>
			<td><a href='index_edit.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='delete_index.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
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
	$cname=$_POST['cname'];
	
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$image2=$_FILES['image2']['name']; //for image
	$image2_tmp=$_FILES['image2']['tmp_name']; //for temp
	$image3=$_FILES['image3']['name']; //for image
	$image3_tmp=$_FILES['image3']['tmp_name']; //for temp
	$sql="insert into `index`(cname,image1,image2,image3)values('$cname','$image1','$image2','$image3')";
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



