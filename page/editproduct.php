
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
					   <b><a href="product.php" class="headertext" >Products</a></b>&nbsp
						 <b><a href="admin_home.php" class="headertext">Home</a></b>&nbsp
					</ul> 
				</div>
			</div>
			<div class="content">
			    <div class="midcontent">
					
					<div class="ttopcontent">
					      <p class="headLine1" ><p style="color:black; font-size:2.9em;">Our Products</p></p>
						  <br>
								<form method="POST" action="" name="form" enctype="multipart/form-data">
					<table class="tableContact">
						<?php
							if(isset($_GET['id']))
							{
								$id=($_GET['id']);
								$sql="select * from `producttable` where id=$id";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									$id=$row['id'];
									$filename1=$row['filename1'];
									$filename2=$row['filename2'];
									$filename3=$row['filename3'];
									$filename4=$row['filename4'];
									$pname=$row['pname'];
								echo "	
								<tr>
									<td>Product Name:&nbsp &nbsp<Input type='text' name='pname' value='' placeholder='$pname'/></td>
								</tr>
								<tr>
									<td> Product Image1:&nbsp &nbsp<img src='image/$filename1' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='filename1'/></td>
								</tr>
								<tr>
									<td> Product Image2:&nbsp &nbsp<img src='image/$filename2' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='filename2'/></td>
								</tr>
								<tr>
								<tr>
									<td> Product Image3:&nbsp &nbsp<img src='image/$filename3' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='filename3'/></td>
								</tr>
								<tr>
								<tr>
									<td> Product Image4:&nbsp &nbsp<img src='image/$filename4' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='filename4'/></td>
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
						
							
					</table>
				</form>			
					</div>
					
					<div class="bottomcontent"></br>
					   
								<div class="create">
			
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
	$pname=$_POST['pname'];
	
	$filename1=$_FILES['filename1']['name'];
	//for image
	$filename1_tmp=$_FILES['filename1']['tmp_name']; 
	//for temp
	$filename2=$_FILES['filename2']['name'];
	//for image
	$filename2_tmp=$_FILES['filename2']['tmp_name'];
	//
	$filename1=$_FILES['filename3']['name'];
	//for image
	$filename1_tmp=$_FILES['filename3']['tmp_name']; 
	//for temp
	$filename1=$_FILES['filename4']['name'];
	//for image
	$filename1_tmp=$_FILES['filename4']['tmp_name']; 
	//for temp
	$edit = "update `producttable` SET `pname`='$pname',`filename1`='$filename1',`filename2`='$filename2',`filename3`='$filename3',`filename4`='$filename4' WHERE id=$id ";
	
	if(mysql_query($edit))
	{
		echo "<script>alert('Done')</script>";
		echo "<script>window.open('product.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('editproduct.php','_self')</script>";
	}
	@move_uploaded_file($filename1_tmp,"image/$filename1");
	@move_uploaded_file($filename2_tmp,"image/$filename2");
	@move_uploaded_file($filename3_tmp,"image/$filename3");
	@move_uploaded_file($filename4_tmp,"image/$filename4");
}
//for uploaded the image

?>	 