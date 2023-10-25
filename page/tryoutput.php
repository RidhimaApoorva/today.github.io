<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
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
					<img src="../Imagee\logo.png" alt="Logo" ></img>
				</div>
				<div class="linkhyper" align="right" >
					<ul id="menu" ></br>
				       <b><a href="index_user.php" class="headertext ">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="Serve_user.php" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp 
					   
					   <b><a href="productuser.php" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			<div class="MainContent"> </br>
				
								<div class="ttoplinks" >...</div>
								
								<div>
								<?php
	$result="select * FROM `home` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' max-height='1%' width='86%'></img></td>
					
		</tr>
			";
	}
?>		
								</div>
								
							<div class ="subcontent" align ="center" display="float">
								
										<div class="maincontentText" align="left" display="float">
												<div class="maincontentTextLeft" >
																 <p style="font-size:28px"> Quality Assurance</p> 
																 <hr class="hrRule" ;>
																 
														<Div class="blog1"align ="center" >
															 <p align="Left"  style="font-size:33px ;color: #A62428">What we strive for</p></br>
													
													
															 <p align="left"  style="font-size:15px">
															 We have always strived for quality be it in terms of workmanship, the fittings and other materials
															 we use or even the packaging its all as per international norms. Our trained staff in guidance 
															 of senior personells ensure that all the expectations of our buyers are fulfilled , 
															 we calculate our companys credibility going by the number of returning customers rather than new ones. 
														   
															   </br>
																  Time and again our buyers have appraised our ability to maintain the standard work quality 
																  and thats what make us stand out in this Global Marketplace.
															   </p></br></br>
												  
																	
												  
															<p align="Left" style="font-size:33px ;Color:#A62428;">Awesome Creative Designs</p></br>
															   
															   <hr class="hrRule" ;>
															   <p align= "left" style="font-size:15px">
																 We	always	look	to add a touch of creativity in our developments which in turn gives our buyers other options to think about.
															   </p>
														</div>
												</div>
										<div class="maincontentTextRight" align ="Right">
												 <H2 align="left">&nbsp &nbsp &nbsp Recent Work</H2></br>
											<Div class="contentRightDivision" align="center">
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
												<!-- <img src="../Imagee\3gs.jpg" alt="Logo" align="center;  height="55%" width="80%""></img> --></br></br>
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
