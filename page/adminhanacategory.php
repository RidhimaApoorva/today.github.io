<?php
include_once("database/db.php");
?>
<html>
    <head>
		<title>Category Form</title>
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
		   <div class= "footer">  </div>
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
		echo "<script>window.open('category.php','_self')</script>";// no need to refresh page to display inserted item
	}
	else
	{
		echo "<script>alert('Error')</script>";
		echo "<script>window.open('category.php','_self')</script>";
	} 
}
@move_uploaded_file($filename_tmp,"image/$filename"); //for uploaded the image

?>



