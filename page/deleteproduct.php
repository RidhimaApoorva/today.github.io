<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>
<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$link="delete FROM `producttable` WHERE id='$id'";
		$result=mysql_query($link);
		
		if($result)
		{
			echo "<script>alert('Deleted Successfully!')</script>";
			echo "<script>window.open('product.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('error')</script>";
			echo "<script>window.open('product.php','_self')</script>";
			
		}
	}
?>