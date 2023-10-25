
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
						<b>
						<a href="admin_cat.php"  class="headertext" >Category</a></b> &nbsp
					   <b><a href="admin_subcat.php"  class="headertext" > Subcategory</a></b> &nbsp
				       <b><a href="product.php" class="headertext">Poducts</a></b>&nbsp
						 <b><a href="admin_home.php" class="headertext">Home</a></b>&nbsp
					
					</ul> 
				</div>
			</div>
			<div class="content">
			    <div class="midcontent">
					
					<div class="ttopcontent">
					      <p class="headLine1" ><p style="color:black; font-size:2.9em;"></p></p>
						  <br>
											<form method="POST" action="" name="form" enctype="multipart/form-data">
							<legend color:"#606060;" >Items in <b>BOLD</b> are required</legend>
								<table class="tableContact">
								 <p align="center" style="font-size:1.9em"> Add Product</p>
											       
												
									<tr>
										<td><b> Category Name:<b/></td>
													
											<td class="tableTD" name="cname">
												<?php
													
													$sql = "SELECT cname from category";
													$result = mysql_query($sql);

													echo "<select name='cname'>";
													while ($row = mysql_fetch_array($result))
													{
														echo "<option value='" . $row['cname'] ."'>" . $row['cname'] ."</option>";   
														// for drop down box
													}
												?>
											</td>
									</tr>			
									<tr>
									    <td><b>product detail<b/></td>
										<td class="tableTD"><Input type="text" name="subname" style=" width:90%" ></td>
												<?php
												  {
												   }
												?>
													
												<!--	<td class="tableTD"><Input type="text" name="subname" style=" width:90%" ></td> -->
									</tr>
									<tr>
										<td><b>Subcategory :<b/></td>
										<td class="tableTD"><Input type="text" name="sname" style=" width:90%" ></td>
									</tr>	
									<tr>
										<td><b>product Name:<b/></td>
										<td class="tableTD"><Input type="text" name="pname" style=" width:90%" ></td>
									</tr>
												
									<tr>
										<td><b>product Image 1</td>
													
										<td class="tableTD"><input type="file" name="filename1" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
									<tr>
										<td><b>product Image 2</td>
										<td class="tableTD"><input type="file" name="filename2" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
									<tr>
										<td><b>product Image 3</td>
										<td class="tableTD"><input type="file" name="filename3" accept="image/gif, image/jpeg, image/png"></td>
									</tr>
									<tr>
										<td><b>product Image 4</td>
										<td class="tableTD"><input type="file" name="filename4" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
												
									<tr>
										<td><b> Description<b/></td>
										<td class="tableTD">
											<textarea style="resize:none" rows="5" name="detail" cols="37"></textarea>
										</td>
									</tr>
											
											
									</table>         </br>
											
								<center>
									<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
								</center>				
						</form>
					
					</div>
					
					<div class="bottomcontent"></br>
					   
								<div class="create">
			<form name="formname" method="GET" action="">
			
			<table>
				<tr>
					<th>product Image</th>
					<th> product Name</th>
					<th> subcategory Name</th>
					<th> Category Name</th>
					<th> product detail</th>
					<th> Edit </th>
					<th>Delete</th>
				</tr>
<?php
	$result="select * FROM `producttable`ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$filename1=$row['filename1'];
		$filename2=$row['filename2'];
		$filename3=$row['filename3'];
		$filename4=$row['filename4'];
		$pname=$row['pname'];
		$sname=$row['sname'];
		$cname=$row['cname'];
		$subname=$row['subname'];
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$filename1' max-height='30%' width='30%'/></td>
			<td>$pname</td>
			<td>$sname</td>
			<td>$cname</td>
			<td>$subname</td>
			<td><a href='editproduct.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='deleteproduct.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
		</tr>
			";
									}
?>				
			</table> 
			</form>	

						    </div>  	
					</div>
		        </div>
				<div class="footer" align="right">
						<code >&copy;HanzalaExports. All right reserved.</code>
				</div>
				
			</div>
		
		</div>
	</body>
</html>

<?php
if(isset($_POST['send']))
{
	$cname=$_POST['cname'];
	$sname=$_POST['sname'];
	$subname=$_POST['subname'];
	$pname=$_POST['pname'];
	$detail=$_POST['detail'];
	$filename1=$_FILES['filename1']['name']; //for image
	$filename1_tmp=$_FILES['filename1']['tmp_name']; //for temp
	
	$filename2=$_FILES['filename2']['name']; //for image
	$filename2_tmp=$_FILES['filename2']['tmp_name']; //for temp
	
	$filename3=$_FILES['filename3']['name']; //for image
	$filename3_tmp=$_FILES['filename3']['tmp_name']; //for temp
	
	$filename4=$_FILES['filename4']['name']; //for image
	$filename4_tmp=$_FILES['filename4']['tmp_name']; //for temp
	
	$sql="insert into `producttable`(cname,sname,subname,pname,filename1,filename2,filename3,filename4,detail)values('$cname','$sname','$subname','$pname','$filename1','$filename2','$filename3','$filename4','$detail')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('product.php','_self')</script>";// no need to refresh page to display inserted item
	}	
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('product.php','_self')</script>";// no need to refresh page to display inserted item
	} 
}
@move_uploaded_file($filename1_tmp,"image/$filename1"); //for uploaded the image in folder
@move_uploaded_file($filename2_tmp,"image/$filename2"); //for uploaded the image"" 
@move_uploaded_file($filename3_tmp,"image/$filename3"); //for uploaded the image""
@move_uploaded_file($filename4_tmp,"image/$filename4"); //for uploaded the image""
?>