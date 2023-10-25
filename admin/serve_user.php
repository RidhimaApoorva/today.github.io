<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>
<html>
	<head>
		<title>Work</title>
		<link rel="stylesheet" type="text/css" href="../css/serve.css"/>
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
				       <b><a href="index_user.php"  class="headertext">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="Serve_user.php" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp&nbsp
					   <b><a href="productuser.php" class="headertext">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="contact.php" class="headertext ">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
		<div class="content">
				<div class="midcontent">
					
					<div class="topcontent">
					      <p class="headLine1" style= "font-size:2.2em" > </br></br>WHAT  WE ARE WORKING ON</p>
						  <br>
                           
                            <p align="left" style="font-size:1.4em;" > We offer a full customized design and development</p>
							 <br/>
                            <p class="leftBlog"  style="color:#606060;">
                             We dont just manufacture bags we create them with standard inputs along with a slight blend of creativity just 
                             to make it stand out in the market thats what our USP lies in. Our executive bags articles are developed after a
                             good research of the market we are aiming for, accordingly we finalize the measurements of Laptop Section, Organizer 
                             and other Pockets keeping in mind their specific requirements. </br>
							 </br>
							 
                             We entertain customized developments in this category, do contact us if you are looking for the same
                             </p> </br>
                              <p class="heading2"style="font-size:1.5em">Just Started</p></br>
                              <p class="leftBlog2" style="color:#606060;">
                               After	having	a	stability in executive bags section we have started focussing on Ladies Hand 
                               Bags considering their huge demand in Global Market. Our showcase with selective articles in comparison to 
                               the executive bags section are mainly with standard measurements, we have used our experience and are coming out </br>with
                               some really innovative designs which will hit the global market soon. Our emphasis is not about coming out
                               </p>
                               </br>
                               <p class="heading2" style="font-size:1.5em">For Corporates</p><br>
                               <p class="leftBlog2" style="color:#606060;">
                               Over the years the preference of Leather products has grown immencely in corporate sector for gifting
                               as well as for promoting their brand identity, and for sure they are looking for something which is worth 
                               good enough to represent their brand. To entertain these demands we have come up with a nice list of products on Leather
                               with corporate branding which can be used for these purposes. </br>
                               The branding can be done through metal logo or through embossing.</br> 
                               These include :</br> 
                               - Business Folders</br>
                               - Utility Pouch</br>
                                 - Travellers Case</br>
                               - File Folde rs</br>
                                We entertain customized developments in this category only for bulk quantity, do contact us if you are looking for the same.
                                </p>
					</div>
					
					<div class="bottomcontent"></br>
					    </br>
						</br>
					    <p style="font-size:1.5em"> &nbsp &nbsp;</br>&nbsp &nbsp; FEATURED WORK</P>
						</br>
						<div class="display"> 
							<div class="imgsize">&nbsp &nbsp;
<?php
	$result="select * FROM `service` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image1=$row['image1'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image1' ></img></td>
					
		</tr>
			";
	}
?>				
								    
							 </br></br>
							 &nbsp &nbsp;
                             <?php
	$result="select * FROM `service` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image2=$row['image2'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image2' ></img></td>
					
		</tr>
			";
	}
?>				
							 </br></br>
							 &nbsp &nbsp;
                            <?php
	$result="select * FROM `service` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image3=$row['image3'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image3'  ></img></td>
					
		</tr>
			";
	}
?>				 </br></br>
                             <hr class="hrRule">
								
					        </div>
						
						
						
					    </div>
					
					</div>
				
				</div>
				
			
		
		</div>
	</body>
</html>