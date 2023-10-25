





<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>

<html>
	<head>
		<title>Work</title>
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
			<div class="MainContent"> </br>
				
								<div class="ttoplinks" >...</div>
								
								<div>hhgh
					<?php
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='1%' ></img></td>
					
		</tr>
			";
	}
?>				
								    
							
								</div>
								
	<div class ="subcontent" align ="center" display="float">
								
		<div class="maincontentText" align="left" display="float">
		 <div class="contentLeft" >
			<Div class="blog1"align ="center" >
			   <p align="Left"  style="font-size:33px ;color: #A62428">Welocome To Hanzala Export</p></br>
															
				<img src="logo.jpg"align="left" alt="Logo" width="30%" height="30%" ></img>	&nbsp &nbsp														
				<p  align="Left" style="font-size:15px ;Color:#A62428;">
				A professionally managed company dealing in finish 
				leather and various leather products to cater the growing 
				needs of leather product users. The manufacturing unit is situated to 
				the adjacent of Ganga River in KANPUR 
				city of Uttar Pradesh (India). </p>
				
				<p  align="Left" style="font-size:15px ;Color:#A62428;">
				We are engaged in Manufacturing, Wholesaling, Exporting and Supplying an extensive assortment of superior 
				quality Leather Belts and Bags that are extremely treasured for their high efficiency, colors, excellence 
				performance and durability.We are indulged in offering a comprehensive array of Men's Designer Belts to our 
				clients at most economical prices. Fabricated using high-grade tanned leather.</p></br></br>
				<img src="logo.jpg"align="left" alt="Logo" width="30%" height="30%" ></img>
				<p align="Left" style="font-size:15px ;Color:#A62428;">aAwesome Creative Designs
				   These belts are at par with the international quality standards.
				 We are recognized as one of the leading 
				manufacturers, wholesalers, exporters and suppliers
				 of the finest quality Belts and Bags. The offered range is 
				available in various sizes, colors, designs and patterns 
				in compliance with latest market trends. High 
				eminence, strength, efficiency and performance are some 
				of the qualities of our range that is highly admired 
				among the clients</p>
															
															   
			</div>
		</div>
												
											
								
										<div class="contentRight" align ="Right">
												 <H2 align="left">&nbsp &nbsp &nbsp New Launches</H2></br>
											<Div class="contentRightDivision" align="center">
											<marquee direction="up" style="margin-top:2vh;"><img src="logo.jpg"align="centre"  alt="Logo" width="90%" height="40%" ></img>		
											</marquee>
				<?php
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image2=$row['image2'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image2'  height=25% width=80%></img></td>
			
					
		</tr>
			";
	}
?>				
												
														 </br></br></br>
							  <?php
									$result="select * FROM `home` ORDER BY `id` DESC";
									$query=mysql_query($result);
									while($row=mysql_fetch_array($query))
									{
										$image3=$row['image3'];
										
										$id=$row['id'];
										echo "	
										<tr>
											<td><img src='image/$image3' height=25% width=80%></img></td>
													
										</tr>
											";
									}
								?>				
												</br></br>
													 <hr class="hrRule" ;>
											</Div>
										</div>
									
									</div>
							</div>
							<div class="foot" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
					</div>
			</div>
		</div>
	</body>
</html>







