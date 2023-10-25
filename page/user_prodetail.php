
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>


<html>
	<head>
		<title>Product Detail</title>
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
					
					      <p class="headLine1" ><p style="color:black; font-size:2.6em;">Product Detail</p></p>
						  <br>
							
					</div>
		
					
					
					<div class="inmid"></br>
					 <?php
							if(isset($_GET['pname']))
							{
								$pname=($_GET['pname']);
								$sql="select * from `producttable` where pname='$pname'";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									
									$id=$row['id'];
									$filename1=$row['filename1'];
									$filename2=$row['filename2'];
									$filename3=$row['filename3'];
									$filename4=$row['filename4'];
									$pname=$row['pname'] ;
								echo "
									 <div class ='mid2'>
										<div class= 'pic1'>
										<img src='image/$filename1'' max-height='95%' width='97%'style='border: 7px double white' ></img>
										
										</div></br></br>
										<div class='pic2'>
											<img src='image/$filename2'' height='60%' width='20%'style='border: 7px double white'></img>
											<img src='image/$filename3'' height='60%' width='20%'style='border: 7px double white'></img>
											<img src='image/$filename4'' height='60%' width='20%' style='border: 7px double white'></img>
											<img src='image/$filename2'' height='60%' width='20%'style='border: 7px double white'></img>
										</div>
							
									 </div>
									 ";
							  
								}}
								?>	
					</div>	
		<!--	<div class="bottomcontent"></br>
					   
				<div class="create" style="border: 7px double white" >
								<form name="formname" method="GET" action="">
								
								<table>
								<?php/*
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
								<div class='productthumbnail'>
									
									<div class ='mid2'>
										<div class= 'pic1' align='center'>
										<img src='image/$filename1' max-height='95%' width='97%'style='border: 7px double white' ></img>
										
										</div></br></br>
										<div class='pic2'>
											<img src='image/$filename1' height='130%' width='80%'style='border: 7px double white' ></img>
											<img src='image/$filename1' height='130%' width='80%'style='border: 7px double white' ></img>
											<img src='image/$filename1' height='130%' width='80%'style='border: 7px double white' ></img>
											<img src='image/$filename1' height='130%' width='80%'style='border: 7px double white' ></img>
										</div>
								</div>
									"; */
								}
							}
					?>
								</table> 
								</form>	
				</div>  	
			</div>
		   </div>-->
				<div class="footer" align="right">
						<code >&copy;HanzalaExports. All right reserved.</code>
				</div>
				
			</div>
		
		</div>
	</body>
</html>


