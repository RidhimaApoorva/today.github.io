
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>


<html>
	<head>
		<title>Subcategory</title>
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
				       <b><a href="user_cat.php" class="headertext">OUR PRODUCTS</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACTUs</a></b>&nbsp&nbsp&nbsp
					
					</ul> 
				</div>
			</div>
			<div class="content">
			<div class="midcontent">
					
					<div class="ttopcontent">
					
					      <p class="headLine1" ><p style="color:black; font-size:2.6em;">Sub Category</p></p>
						  <br>
							
					</div>
					
			<div class="bottomcontent"></br>
					   
				<div class="create" style="border: 7px double white" align="center">
								<form name="formname" method="GET" action="">
								
								<table>
								<?php
								if(isset($_GET['cname']))
								{
									echo $cname=($_GET['cname']);
									$result=("select * FROM `subcategory` WHERE cname='$cname'");
									$query=mysql_query($result);
									while($row=mysql_fetch_array($query))	
									{	
										echo $filename=$row['filename'];
										echo $sname=$row['sname'];		
										$id=$row['id'];
		echo "	
		<div class='productthumbnail'>
				<div><img src='image/$filename' height='180 %' width='90%' style='border: 7px double white' ></img><div>
				</div><a href='user_pro.php?sname=$sname'>$sname</a></div>
		</div>
			";
	}}
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


