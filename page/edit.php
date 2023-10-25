
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
					<b><a href="home.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="about.php"  class="headertext" > ABOUT US</a></b> &nbsp&nbsp&nbsp
					   <b><a href="profile.php" class="headertext" >PROFILE</a></b>&nbsp&nbsp&nbsp
				       <b><a href="product.php" class="headertext">OUR PRODUCTS</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACTUs</a></b>&nbsp&nbsp&nbsp
					</ul> 
				</div>
			</div>
			<div class="content">
			    <div class="midcontent">
					
					<div class="ttopcontent">
					      <p class="headLine1" ><p style="color:black; font-size:2.9em;">Contact Us</p></p>
						  <br>
							<form method="POST" action="" name="form" enctype="multipart/form-data">
					
					<legend color:"#606060;" >Items in <b>BOLD</b> are required</legend>
					<table class="tableContact">
					    <p align="center" style="font-size:1.9em"> Create Category</p>
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
						
							if(isset($_GET['id']))
							{
								$id=($_GET['id']);
								$sql="select * from `category` where id=$id";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									$id=$row['id'];
									$filename=$row['filename'];
									$cname=$row['cname'];
								echo "	
								<tr>
									<td>Name:&nbsp &nbsp<Input type='text' name='cname' value='' placeholder='$cname'/></td>
								</tr>
								<tr>
									<td> Image:&nbsp &nbsp<img src='image/$filename' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
										<td><input type='file' name='filename'/></td>
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
					</div>
		        </div>
				<div class="footer" align="right">
						<code >&copy;HanzalaExports. All right reserved.</code>
				</div>
				
			</div>
		
		</div>
		<?php	

if(isset($_POST['send']))
{
	$cname=$_POST['cname'];
	
	$filename=$_FILES['filename']['name'];
	//for image
	$filename_tmp=$_FILES['filename']['tmp_name']; 
	//for temp
	$edit = "update `category` SET `cname`='$cname',`filename`='$filename' WHERE id=$id ";
	
	if(mysql_query($edit))
	{
		echo "<script>alert('Done')</script>";
		
	}
	else
	{
		echo "<script>alert('Error')</script>";
		
	} @move_uploaded_file($filename_tmp,"image/$filename");
}
//for uploaded the image

?>	 
	
	</body>
</html>







