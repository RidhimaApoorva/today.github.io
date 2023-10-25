<?php
include_once("database/db.php");
?>
<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$link="delete FROM `index` WHERE id='$id'";
		$result=mysql_query($link);
		
		if($result)
		{
			echo "<script>alert('Deleted Successfully!')</script>";
			echo "<script>window.open('admin_index.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('error')</script>";
			echo "<script>window.open('admin_index.php','_self')</script>";
		}
	}
?>