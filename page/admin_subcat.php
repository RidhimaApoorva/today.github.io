
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
					<fieldset class= "fieldsetContact">
					<legend color:"#606060;" >Items in <b>BOLD</b> are required </legend>
					<table class="tableContact">
					<p align="center" style="font-size:1.9em"> Create Sub-Category</p>
												
					<tr>
						<td><b> Category Name:<b/></td>								
							<td class="tableTD">
							<?php									
								$sql = "SELECT cname from category";
								$result = mysql_query($sql);				
								echo "<select name='cname'>";
								while ($row = mysql_fetch_array($result))
								{
									echo "<option value='" . $row['cname'] ."'>" . $row['cname'] ."</option>";
								}
							?> 
									
							</td>
					</tr>
						<tr>
							<td><b>Sub Category Name:<b/></td>
							<td class="tableTD">
									<Input type="text" name="sname" style=" width:90%" required ></td>
						</tr>
						<tr>
							<td><b>Sub Category image</td>
							<td class="tableTD"><input type="file" name="filename" accept="image/gif, image/jpeg, image/png" required></td>
						</tr>
					</table>
					</br>
											
							<center>
								<input type="submit" value="Submit" style=" color:#A62428" name="send"  class="Buttonsubmit"  >
							</center>
					</fieldset>
				</form>  
					
					
					
					</div>
					
					<div class="bottomcontent"></br>
					   
								<div class="create">
			<form name="formname" method="GET" action="">
			
			<table>
				<tr>
					<th> Sub Category Image</th>
					<th> Sub Category</th>
					<th> category</th>
					<th> Edit </th>
					<th>Delete</th>
				</tr>

 <?php
 /*
 //dis cde for display the image
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image6=$row['image6'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image6' max-height='30%' width='60%'></img></td>
			
			<td><a href='edit.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='delete.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
		</tr>
			";
	}
	*/
?>						
<?php
	$result="select * FROM `subcategory`ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$filename=$row['filename'];
		$sname=$row['sname'];
		$id=$row['id'];
		$cname=$row['cname'];
		echo "	
		<tr>
			<td><img src='image/$filename' max-height='30%' width='60%'/></td>
			<td>$sname</td>
			<td>$cname</td>
			<td><a href='editsub.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='deletesub.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
				
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
	$sname=$_POST['sname'];
	$cname=$_POST['cname'];
	$filename=$_FILES['filename']['name']; //for image
	$filename_tmp=$_FILES['filename']['tmp_name']; //for temp
	
	$sql="insert into `subcategory`(sname,cname,filename)values('$sname','$cname','$filename')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('admin_subcat.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('admin_subcat.php','_self')</script>";// no need to refresh page to display inserted item
	}
}  @move_uploaded_file($filename_tmp,"image/$filename"); //for uploaded the image

?>


