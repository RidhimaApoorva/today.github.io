
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("hanzala") or die ("not connected to database"); //connecting to db
?>

<html>
	<head>
		<title>ABOUT</title>
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
					   <b><a href="contact.php" class="headertext">CONTACTUs</a></b>&nbsp&nbsp
					
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
						<h1 align="Left"><b><u><em>ESHTABLISHMENT</em></u></b></h1></br></br>									
				<img src="logo.jpg"align="left" alt="Logo" width="30%" height="30%" ></img>	&nbsp &nbsp														
				<p  align="Left" style="font-size:15px ;Color:#A62428;">
				Incorporate in the year of 2005 at Kanpur, (Uttar Pradesh, India), we, “Hanzala Export” is one of the leading 
				Manufacturer, Wholesaler, Supplier and Exporter of various kinds of Leather Products that are tremendously 
				cherished among the clients for their high efficiency, colors, excellence performance and durability. Further, 
				manufactured using premium quality raw material in compliance with hi-tech machines and equipment by our 
				trustworthy vendors, these products are available in various sizes, designs, attractive colors and other 
				various specifications for our clients.</p>
				
				
				</p></br></br>
				<h1 align="Left"><b><u><em>OUR MISSION</em></u></b></h1></br></br>
				<p align="Left" style="font-size:15px ;Color:#A62428;">With the assistance of our highly experienced and
				talented professionals & advance manufacturing unit, we 
				manufacture, wholesale, export and supply superior quality Belts and Bags to our valued clients across the 
				globe. We are offering an enchanting range of fashionable Designer belts that are specifically designed from 
				unblemished quality leather procured from trusted tanneries of the market.
				The company has always taken a responsible attitude in adapting and changing manufacturing processes to take 
				into account the health and safety of its employees and the impact of its operations to the environment. Aim to 
				minimise waste through the stringent use of all materials supplies and energy. maintain a research and 
				development activity,aimed at more efficient and more environmentally acceptable technology.</p>				   
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