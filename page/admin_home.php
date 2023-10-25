
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>


<html>
	<head>
		<title>admin home</title>
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
					      <p class="headLine1" ><p style="color:black; font-size:2.9em;">Admin HomePage Image</p></p>
						  <br>
							<form method="POST" action="" name="form" enctype="multipart/form-data">
					
								<legend color:"black" >Items in <b>BOLD</b> are required</legend>
									<table>
									<p align="center" style="font-size:1.4em"></p>
									<tr>
										<td><b>Sample Image</td>
													
										<td class="tableTD"><input type="file" name="image1" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
									<tr>
										<td><b>Sample Image</td>
													
										<td class="tableTD"><input type="file" name="image2" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
									
									<tr>
										<td><b>Sample Image</td>
													
										<td class="tableTD"><input type="file" name="image3" accept="image/gif, image/jpeg, image/png"></td>
													
									</tr>
									<center>
										<input type="submit" value="Submit" style=" color:#A62428" name="send" class="Buttonsubmit">
									</center>	
									
							</form>
					</div>
					
					<?php
 //dis cde for display the image
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		$image2=$row['image2'];
		$image3=$row['image3'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='30%' width='60%'></img></td>
			<td><img src='image/$image2' max-height='30%' width='60%'></img></td>
			<td><img src='image/$image3' max-height='30%' width='60%'></img></td>

			<td><a href='index_edit.php?id=$id'><input type='button' name='' value='Edit'/></a></td>
			<td><a href='delete_index.php?id=$id'><input type='button' name='' value='Delete'/></a></td>			
		</tr>
			";
	}
	
?>						
		        </div>
				
				
			</div>
		<div class="footer" align="right">
						<code >&copy;HanzalaExports. All right reserved.</code>
				</div>
		</div>
	</body>
</html>
<?php/*
//this code for insert the image in database

if(isset($_POST['send']))
{
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$image2=$_FILES['image2']['name']; //for image
	$image2_tmp=$_FILES['image2']['tmp_name']; //for temp
	$image3=$_FILES['image3']['name']; //for image
	$image3_tmp=$_FILES['image3']['tmp_name']; //for temp
	$sql="insert into `home`(image1,image2,image3)values('$image1','$image2','$image3')";
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
}*/

?>

<?php
//this code for insert the image in database

if(isset($_POST['send']))
{
	
	$image1=$_FILES['image1']['name']; //for image
	$image1_tmp=$_FILES['image1']['tmp_name']; //for temp
	$image2=$_FILES['image2']['name']; //for image
	$image2_tmp=$_FILES['image2']['tmp_name']; //for temp
	$image3=$_FILES['image3']['name']; //for image
	$image3_tmp=$_FILES['image3']['tmp_name']; //for temp
	$sql="insert into `home`(image1,image2,image3)values('$image1','$image2','$image3')";
	if(mysql_query($sql))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('tryoutput.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('try.php','_self')</script>";
	} 
}
@move_uploaded_file($image1_tmp,"image/$image1"); //for uploaded the image
@move_uploaded_file($image2_tmp,"image/$image2"); //for uploaded the image
@move_uploaded_file($image3_tmp,"image/$image3"); //for uploaded the image
?>







