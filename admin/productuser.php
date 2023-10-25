
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>
<html>
	<head>
		<title>Work</title>
		<link rel="stylesheet" type="text/css" href="../css/inn.css"/>
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
					   <b><a href="contact.php" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			<div class="content">
				<div class="midcontent">
					<div class="topcontent">
					    <p class="headLine1" style="font-size:48px ">Some Of Our Work</p>
						<br>
                        <p align="left" style="color:#606060" "font-size:40px " > Below is a small sampling of our work.Additional samples 
                        of our Professional work for fortune and enterprise-level clients are available upon request but cannot be shown here.</p>
					</div></BR></br></br>
					
				<div class="bottomcontent">
					<div class="productdisplay"> 
						<?php
						 $result="select * FROM `product` ORDER BY `id` DESC";
							$query=mysql_query($result);
							while($row=mysql_fetch_array($query))
							{
							$image1=$row['image1'];
							$image2=$row['image2'];
							$image3=$row['image3'];
							$image4=$row['image4'];
							$image5=$row['image5'];
							$id=$row['id'];
							$product=$row['product'];
							$description=$row['description'];
							$article=$row['article'];
							$art_data=$row['art_data'];
							echo "
							<div class='productthumbnail' >						
							  <div >	
								<img src='image/$image1' height='60%' width='96%'style='border: 7px double white'  ></img>
								</br>
							  </div>
							  <div>
								<p>$product</p></br>
								<p>$article</p></br>
								
								<p><a href='editproduct.php?id=$id'><img src='view.png' alt='Logo' align='left'></a></p>
							  </div>
							  </br></br>
							</div>	";
							}
							?>
					</div> 
						</br></br></br></br></br>
				</div>
				</div>
			</div>
			<div class="footer" align="right">
				<code >&copy;2011 by Leatherhub. All right reserved.</code>
			</div>
		
		</div>
	</body>
</html>