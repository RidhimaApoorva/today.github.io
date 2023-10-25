<?php
include_once("database/db.php");
?>
<html>
    <head>
		<title>Update Form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
	
	<body>
	    <div class= "header" >
		<?php include_once("common.php");?>
		</div>
		<div class= "main">
			<div class="admin">
				<?php include_once("common2.php");?>
			</div>
			<div class="createcategory">
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
		</div>
		<div class= "footer">  </div>
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
		
	}
	else
	{
		echo "<script>alert('Error')</script>";
		
	} @move_uploaded_file($filename1_tmp,"image/$filename1");
	@move_uploaded_file($filename2_tmp,"image/$filename2");
}
//for uploaded the image

?>	 
	
	</body>
</html>
