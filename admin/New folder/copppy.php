
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>
<html>
	<head>
		<title>Work</title>
		<link rel="stylesheet" type="text/css" href="../css/in.css"/>
	</head>
	
	<body>
		<div class="toplink"></div>
		<div class="main">
			
			<div class="header">
				<div class="imgdesign">
					<img src="../Imagee\logo.png" alt="Logo"></img>
				</div>
				<div class="linkhyper" align="right" >
					<ul id="menu" >
				       <b><a href="index_user.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="serve_user.php"  class="headertext" > SERVICES</a></b> &nbsp&nbsp&nbsp
					   <b><a href="productuser.php" class="headertext" >WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
			<div class="content">
				<div class="midcontent">
					
					<div class="topcontent">
					      
						
					</div></BR></br></br>
					
					<div class="bottomcontent">
						<div class="display"> 
							<div class="imgsize">
								<?php
							if(isset($_GET['id']))
							{
								$id=($_GET['id']);
								$sql="select * from `product` where id=$id";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									$id=$row['id'];
									$image1=$row['image1'];
									$image2=$row['image2'];
									$image3=$row['image3'];
									$image4=$row['image4'];
									$image5=$row['image5'];
									$product=$row['product'];
									$description=$row['description'];
									$article=$row['article'];
								echo "	
								<div>
								 <div>
									<tr>
									<td> $product</td></br></br>
									</tr>
									<tr>
									<td> $article</td></br></br>
									</tr>
								 </div>
								 
								 <div='kkk'>
									<tr>
										<td> $description</td>
									</tr>
									<tr>
									<td> &nbsp &nbsp<img src='image/$image2' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								
								
								<tr>
									<td> &nbsp &nbsp<img src='image/$image3' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>

								<tr>
									<td> &nbsp &nbsp<img src='image/$image4' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								<tr>
									<td> &nbsp &nbsp<img src='image/$image5' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								</div>
								
								<div class='kk'>
								<tr>
										<td> &nbsp &nbsp<img src='image/$image1' align'center' max-height='40%' width='80%'/><br/></td>
									</tr>
								
								</div>
								</div>
								";
								}}
								?>				
							</div>	
						</div></br></br></br></br></br>
					</div>
					
					<div class="footer" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
					</div>
				
				</div>
			</div>
		
		</div>
	</body>
</html>

<?php	/*
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db*/
?>
   <!--<html>
	<head>
		<title>Work</title>
		<link rel="stylesheet" type="text/css" href="../css/in.css"/>
	</head>
	
	<body>
		<div class="toplink"></div>
		<div class="main">
			
			<div class="header">
				<div class="imgdesign">
					<img src="../Imagee\logo.png" alt="Logo"></img>
				</div>
				<div class="linkhyper" align="right" >
					<ul id="menu" >
				       <b><a href="index_user.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="serve_user.php"  class="headertext" > SERVICES</a></b> &nbsp&nbsp&nbsp
					   <b><a href="productuser.php" class="headertext" >WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
			<div class="content">
				<div class="midcontent">
					
					<div class="topcontent">
					      
						
					</div></BR></br></br>
					
					<div class="bottomcontent">
						<div class="display"> 
							<div class="imgsize">
								<?php/*
							if(isset($_GET['id']))
							{
								$id=($_GET['id']);
								$sql="select * from `product` where id=$id";
								$query=mysql_query($sql);
								while($row=mysql_fetch_array($query))
								{	
									$id=$row['id'];
									$image1=$row['image1'];
									$image2=$row['image2'];
									$image3=$row['image3'];
									$image4=$row['image4'];
									$image5=$row['image5'];
									$product=$row['product'];
									$description=$row['description'];
									$article=$row['article'];
								echo "	
								<div>
								 <div>
									<tr>
									<td> $product</td></br></br>
									</tr>
									<tr>
									<td> $article</td></br></br>
									</tr>
								 </div>
								 
								 <div='kkk'>
									<tr>
										<td> $description</td>
									</tr>
									<tr>
									<td> &nbsp &nbsp<img src='image/$image2' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								
								
								<tr>
									<td> &nbsp &nbsp<img src='image/$image3' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>

								<tr>
									<td> &nbsp &nbsp<img src='image/$image4' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								<tr>
									<td> &nbsp &nbsp<img src='image/$image5' align'center' max-height='15%' width='15%'/><br/></td>
								</tr>
								</div>
								
								<div class='kk'>
								<tr>
										<td> &nbsp &nbsp<img src='image/$image1' align'center' max-height='40%' width='80%'/><br/></td>
									</tr>
								
								</div>--
								</div>
								";
							*/	}}
								?>				
							</div>	
						</div></br></br></br></br></br>
					</div>
					
					<div class="footer" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
					</div>
				
				</div>
			</div>
		
		</div>
	</body>
</html>-->