

<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>

 <html>
	<head>
		<title>........Product.....</title>
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
					   
					   <b><a href="product.php" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					 
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
							<td><b> Product Name:<b/></td>
							<td class="tableTD"><Input type="text" name="product" style=" width:90%" ></td>
							</tr>
							<tr>
							<td><b> Article</td>
							<td class="tableTD"><input type="text" name="article"style=" width:90%" ></td>
						</tr>
						
						<tr>
						<td><b> Description</td>
							<td class="tableTD"><textarea style="resize:none" rows="15" name="description" cols="37">
							

							</textarea></td>
						</tr>
						<tr>
						<td><b> Image1</td>
							<td class="tableTD"><input type="file" name="image1" ></td>
						</tr>
						<tr>
						<td><b> Image2</td>
							<td class="tableTD"><input type="file" name="image2" ></td>
						</tr>
						<tr>
						<td><b> Image3</td>
							<td class="tableTD"><input type="file" name="image3" ></td>
						</tr>
						<tr>
						<td><b> Image4</td>
							<td class="tableTD"><input type="file" name="image4" ></td>
						</tr>
						<tr>
						<td><b> Image5</td>
							<td class="tableTD"><input type="file" name="image5" ></td>
						</tr>
						</table></br>
						<center>
							<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
						</center>
										
				</form>
				</div>
				<div class="maincontentTextRight" align ="Right">
												 <H2 align="left">&nbsp &nbsp &nbsp Recent Work</H2></br>
											<Div class="contentRightDivision" align="center">
											<form name="formname" method="GET" action="">
			
			<table>
				

 <?php 
 
 //dis cde for display the image
	$result="select * FROM `product` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		$image2=$row['image2'];
		$image3=$row['image3'];
		$image4=$row['image4'];
		$image5=$row['image5'];
		$product=$row['product'];
		$article=$row['article'];
		
		$description=$row['description'];
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='30%' width='60%'></img></td></br>
			
			<td>$product</td></br>
			<td>$article</td></br>
			
			<td><a href='editproduct.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
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
	$product=$_POST['product'];
	$article=$_POST['article'];
	$description=$_POST['description'];
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$image2=$_FILES['image2']['name']; //for image
	$image2_tmp=$_FILES['image2']['tmp_name']; //for temp
	$image3=$_FILES['image3']['name']; //for image
	$image3_tmp=$_FILES['image3']['tmp_name']; //for temp
	$image4=$_FILES['image4']['name']; //for image
	$image4_tmp=$_FILES['image4']['tmp_name']; //for temp
	$image5=$_FILES['image5']['name']; //for image
	$image5_tmp=$_FILES['image5']['tmp_name']; //for temp
	$sql="insert into `product`(product,article,description,image1,image2,image3,image4,image5)values('$product','$article','$description','$image1','$image2','$image3','$image4','$image5')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('productuser.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('product.php','_self')</script>";// no need to refresh page to display inserted item
	} 
}
@move_uploaded_file($image1_tmp,"image/$image1"); //for uploaded the image
@move_uploaded_file($image2_tmp,"image/$image2"); //for uploaded the image
@move_uploaded_file($image3_tmp,"image/$image3"); //for uploaded the image
@move_uploaded_file($image4_tmp,"image/$image4"); //for uploaded the image
@move_uploaded_file($image5_tmp,"image/$image5"); //for uploaded the image
?>



