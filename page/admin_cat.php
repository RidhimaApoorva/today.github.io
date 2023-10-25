
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
					      <p class="headLine1" ><p style="color:black; font-size:2.6em;">Create Category</p></p>
						  <br>
							<form method="POST" action="" name="form" enctype="multipart/form-data">
					
					<legend color:"#606060;" >Items in <b>BOLD</b> are required</legend></br>
					<table class="tableContact">
					    <p align="center" style="font-size:1.9em"> </p>
						<tr>
							<td><b> Category Name:<b/></td>
							<td class="tableTD"><Input type="text" name="cname" style=" width:90%" required/></td>
						</tr>
						<tr>
							<td><b> Category image</td>
							<td class="tableTD"><input type="file" name="filename" required/></td>
						</tr>
					</table></br>
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
					<th>Category Image</th>
					<th> Category Name</th>
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
 //dis cde for display the image
	$result="select * FROM `category` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$filename=$row['filename'];
		$cname=$row['cname'];
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$filename' max-height='30%' width='60%'></img></td>
			<td>$cname</td>
			<td><a href='edit.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='delete.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
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
//this code for insert the image in database

if(isset($_POST['send']))
{
	$cname=$_POST['cname'];
	$filename=$_FILES['filename']['name']; //for image
	$filename_tmp=$_FILES['filename']['tmp_name']; //for temp
	$sql="insert into `category`(cname,filename)values('$cname','$filename')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('','_self')</script>";
	} 
}
@move_uploaded_file($filename_tmp,"image/$filename"); //for uploaded the image

?>