

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
					   
					   <b><a href="admin_work.php" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
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
						</tr>
						<td><b> Image4</td>
							<td class="tableTD"><input type="file" name="image4" ></td>
						</tr>
						</tr>
						<td><b> Image5</td>
							<td class="tableTD"><input type="file" name="image5" ></td>
						</tr>
						</tr>
						<td><b> Image6</td>
							<td class="tableTD"><input type="file" name="image6" ></td>
						</tr>
						<tr>
							<td><b> Image7</td>
							<td class="tableTD"><input type="file" name="image7" ></td>
						</tr>
						<tr>
							<td><b> Image8</td>
							<td class="tableTD"><input type="file" name="image8" ></td>
						</tr>
						<tr>
							<td><b> Image9</td>
							<td class="tableTD"><input type="file" name="image9" ></td>
						</tr>
						<tr>
							<td><b> Image10</td>
							<td class="tableTD"><input type="file" name="image10" ></td>
						</tr>
						<tr>
							<td><b> Image11</td>
							<td class="tableTD"><input type="file" name="image11" ></td>
						</tr>
						<tr>
							<td><b> Image12</td>
							<td class="tableTD"><input type="file" name="image12" ></td>
						</tr>
						<tr>
							<td><b> Image13</td>
							<td class="tableTD"><input type="file" name="image13" ></td>
						</tr>
						<tr>
							<td><b> Image14</td>
							<td class="tableTD"><input type="file" name="image14" ></td>
						</tr>
						<tr>
							<td><b> Image15</td>
							<td class="tableTD"><input type="file" name="image15" ></td>
						</tr>
						<tr>
							<td><b> Image16</td>
							<td class="tableTD"><input type="file" name="image16" ></td>
						</tr>
						<tr>
							<td><b> Image17</td>
							<td class="tableTD"><input type="file" name="image17" ></td>
						</tr>
						<tr>
							<td><b> Image18</td>
							<td class="tableTD"><input type="file" name="image18" ></td>
						</tr><tr>
							<td><b> Image19</td>
							<td class="tableTD"><input type="file" name="image19" ></td>
						</tr><tr>
							<td><b> Image20</td>
							<td class="tableTD"><input type="file" name="image20" ></td>
						</tr>
						<tr>
							<td><b> Image21</td>
							<td class="tableTD"><input type="file" name="image21" ></td>
						</tr><tr>
							<td><b> Image22</td>
							<td class="tableTD"><input type="file" name="image22" ></td>
						</tr><tr>
							<td><b> Image23</td>
							<td class="tableTD"><input type="file" name="image23" ></td>
						</tr><tr>
							<td><b> Image24</td>
							<td class="tableTD"><input type="file" name="image24" ></td>
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
					<th> Image1</th>
					<th> Image2</th>
					<th> Image3</th>
					
					<th> Name</th>
					<th> Edit </th>
					<th>Delete</th>
				</tr>

 <?php
 //dis cde for display the image
	$result="select * FROM `work` ORDER BY `id` DESC";
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
	$cname=$_POST['cname'];
	
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
	$image6=$_FILES['image6']['name']; //for image
	$image6_tmp=$_FILES['image6']['tmp_name']; //for temp
	$image7=$_FILES['image7']['name']; //for image
	$image7_tmp=$_FILES['image7']['tmp_name']; //for temp
	$image8=$_FILES['image8']['name']; //for image
	$image8_tmp=$_FILES['image8']['tmp_name']; //for temp
	$image9=$_FILES['image9']['name']; //for image
	$image9_tmp=$_FILES['image9']['tmp_name']; //for temp
	$image10=$_FILES['image10']['name']; //for image
	$image10_tmp=$_FILES['image10']['tmp_name']; //for temp
	$image11=$_FILES['image11']['name']; //for image
	$image11_tmp=$_FILES['image11']['tmp_name']; //for temp
	$image12=$_FILES['image12']['name']; //for image
	$image12_tmp=$_FILES['image12']['tmp_name']; //for temp
	
	$image13=$_FILES['image13']['name']; //for image
	$image13_tmp=$_FILES['image13']['tmp_name']; //for temp
	$image14=$_FILES['image14']['name']; //for image
	$image14_tmp=$_FILES['image14']['tmp_name']; //for temp
	$image15=$_FILES['image15']['name']; //for image
	$image15_tmp=$_FILES['image15']['tmp_name']; //for temp
	$image16=$_FILES['image16']['name']; //for image
	$image16_tmp=$_FILES['image16']['tmp_name']; //for temp
	$image17=$_FILES['image17']['name']; //for image
	$image17_tmp=$_FILES['image17']['tmp_name']; //for temp
	$image18=$_FILES['image18']['name']; //for image
	$image18_tmp=$_FILES['image18']['tmp_name']; //for temp
	$image19=$_FILES['image19']['name']; //for image
	$image19_tmp=$_FILES['image19']['tmp_name']; //for temp
	$image20=$_FILES['image20']['name']; //for image
	$image20_tmp=$_FILES['image20']['tmp_name']; //for temp
	$image21=$_FILES['image21']['name']; //for image
	$image21_tmp=$_FILES['image21']['tmp_name']; //for temp
	$image22=$_FILES['image22']['name']; //for image
	$image22_tmp=$_FILES['image22']['tmp_name']; //for temp
	$image23=$_FILES['image23']['name']; //for image
	$image23_tmp=$_FILES['image23']['tmp_name']; //for temp
	$sql="insert into `work`(cname,image1,image2,image3,image4,image5,image6,image7,image8,image9,image10,image11,image12,image13,image14,image15,image16,image17,image18,image19,image20,image21,image22,image23,image24)
	values('$cname','$image1','$image2','$image3','$image4','$image5','$image6','$image7','$image8','$image9','$image10','$image11','$image12','$image13','$image14','$image15','$image16','$image17','$image18','$image19',
	'$image20','$image21','$image22','$image23','$image24')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('admin_work.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		/*echo "<script>window.open('admin_work.php','_self')</script>";*/
	} 
}
@move_uploaded_file($image1_tmp,"image/$image1"); //for uploaded the image
@move_uploaded_file($image2_tmp,"image/$image2"); //for uploaded the image
@move_uploaded_file($image3_tmp,"image/$image3"); //for uploaded the image
@move_uploaded_file($image4_tmp,"image/$image4"); //for uploaded the image
@move_uploaded_file($image5_tmp,"image/$image5"); //for uploaded the image
@move_uploaded_file($image6_tmp,"image/$image6"); //for uploaded the image
@move_uploaded_file($image7_tmp,"image/$image7"); //for uploaded the image
@move_uploaded_file($image8_tmp,"image/$image8"); //for uploaded the image
@move_uploaded_file($image9_tmp,"image/$image9"); //for uploaded the image
@move_uploaded_file($image10_tmp,"image/$image10"); //for uploaded the image
@move_uploaded_file($image11_tmp,"image/$image11"); //for uploaded the image
@move_uploaded_file($image12_tmp,"image/$image12"); //for uploaded the image
@move_uploaded_file($image13_tmp,"image/$image13"); //for uploaded the image
@move_uploaded_file($image14_tmp,"image/$image14"); //for uploaded the image
@move_uploaded_file($image15_tmp,"image/$image15"); //for uploaded the image
@move_uploaded_file($image16_tmp,"image/$image16"); //for uploaded the image
@move_uploaded_file($image17_tmp,"image/$image17"); //for uploaded the image
@move_uploaded_file($image18_tmp,"image/$image18"); //for uploaded the image
@move_uploaded_file($image19_tmp,"image/$image19"); //for uploaded the image
@move_uploaded_file($image20_tmp,"image/$image20"); //for uploaded the image
@move_uploaded_file($image21_tmp,"image/$image21"); //for uploaded the image
@move_uploaded_file($image22_tmp,"image/$image22"); //for uploaded the image
@move_uploaded_file($image23_tmp,"image/$image23"); //for uploaded the image
@move_uploaded_file($image24_tmp,"image/$image24"); //for uploaded the image


?>



