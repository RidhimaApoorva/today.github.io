
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>

<html>
	<head>
		<title>PROFILE</title>
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
					<b>
					<a href="home.php"  class="headertext" >HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="about.php"  class="headertext" > ABOUT US</a></b> &nbsp&nbsp&nbsp
					   <b><a href="profile.php" class="headertext" >PROFILE</a></b>&nbsp&nbsp&nbsp
				       <b><a href="user_cat.php" class="headertext">OUR PRODUCTS</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext">CONTACTUS</a></b>&nbsp&nbsp
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
							<td><img src='image/$image1' max-height='1%' width='86%' ></img></td>
									
						</tr>
							";
					}
					?>
				</div>
								
	<div class ="subcontent" align ="center" display="float">
								
		<div class="maincontentText" align="left" display="float">
		 <div class="aboutpagecontent" >
			<Div class="blog1"align ="center" >
			   <p align="Left"  style="font-size:33px ;color: #A62428">Welocome To Hanzala Export</p></br>
						<h1 align="Left"><b><u><em>OUR PROFILE</em></u></b></h1></br></br>									
				<img src="logo.jpg"align="left" alt="Logo" width="30%" height="30%" ></img>	&nbsp &nbsp														
				<p  align="Left" style="font-size:15px ;Color:#A62428;">
				“Hanzala Export” with a convection to bring distant people closer, promotes understanding, 
				friendship and co-operation among nations. This name is reckoned in the international
				leather forums  for fusing new knowledge and technologies to create new products for
				the benefit of all mankind.</p>
					</br>
				<p align="Left" style="font-size:15px ;Color:#A62428;">
				Working harmoniously with the environment ever alert to concerns of pollution and
				always promoting a clean and healthy way of life.</p></br>
				
				</p></br></br>
				<h1 align="Left"><b><u><em>ENVIRONMENT</em></u></b></h1></br></br>
				<p align="Left" style="font-size:15px ;Color:#A62428;">
				Our ability to relate to a customer's requirements and respond with the flexibility of a products made-to-

				order-and-deliver capability is a definite edge we enjoy over our competition. Combining them with state-of-

				the-art machinery, the company is engaged in a constant endeavour to set the highest standards in quality, 
				performance, reliability and professionalism.
				Flexibility and innovative approach helps build a competitive edge over other. 
				The mark of excellence is at our .	doorsteps. The global client we target under our previe.</p>	
				<p align="Left" style="font-size:15px ;Color:#A62428;"> 
				Care for the environment and protection has been a major concern of the company from the date of its 
				establishment, In creating leather from the hide & skin, by-products of the world meat industries, Everest 
				Tannery enhances the beauty & performance of a natural renewable material.
				The company has always taken a responsible attitude to the environment 
				and has adoped and changed manufacturing process to take into account 
				the health and safety of its employees and the impact of its operations on the 
				environment.</p>
			</div>
		  </div>
								
		</div>
									
	</div>
			</div>
				<div class="foot" align="right">
					<code >&copy;2011 by Leatherhub. All right reserved.</code>
				</div>
		</div>
		
	</body>
</html>