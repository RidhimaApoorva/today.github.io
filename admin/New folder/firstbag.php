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
				       <b><a href="index.html" class="headertext ">HOME</a></b> &nbsp&nbsp&nbsp
					   <b><a href="Serve.html" class="headertext ">SERVICES</a></b>&nbsp&nbsp&nbsp 
					   
					   <b><a href="er.html" class="headertext  ">WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
			<div class="content">
			    <div class="midcontent">
					
					<div class="intop">
					       <p></br> </br></p>
					     <p style="padding-bottom:15px; font-size:32px";>Three Gussate Portfolio Bag<p>
                           
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
									$product=$row['product'];
									$description=$row['description'];
								echo "	
								
								<tr>
									<td> Product Image1:&nbsp &nbsp<img src='image/$image1' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								
								<tr>
									<td> Product Image2:&nbsp &nbsp<img src='image/$image2' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								
								
								<tr>
									<td> Product Image3:&nbsp &nbsp<img src='image/$image3' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>

								<tr>
									<td> Product Image4:&nbsp &nbsp<img src='image/$image4' align'center' max-height='10%' width='10%'/><br/></td>
								</tr>
								<tr>
									<td> $description</td>
								</tr>";
								}}
								?>				
						
						
					</div>
					
					<div class="inmid"></br>
					 
                        <div class ="mid1">
						        <div class="section client" style="color:#606060 ">
								          <p></br> </p>
										<p style="font-size:19px">Article : <strong>LH-BG-012</strong></h2></br>
										<p>Clean leather laptop carrier.</p></br>
										<p class="client_subtitle">The Journalcase is designed to fit all </p><p>your Apple notebooks or their PC equivalents.</p>
							    </div>
							  </br>
							  </br>
							    <div class="section" style="color:#606060 ">
								 <p style="font-size:21px">Journalcase features:</p>
								   <p>- Cow PDM<br>
									- High quality full-grain leather<br>
									- 100 % Handcrafted<br>
									- Foamed inner layer for optimal protection<br>
									- Luxury chrome-plated oversized zippers<br>
									- Detachable padded, and adjustable shoulder strap<br>
									- Dual function handle<br>
									- Chrome plated metal hooks</p>
							    </div>
								</br></br>
								
								<div class="section">
										<p style="font-size:21px">Dimensions</p>
										<p> xx xx xx cm <br />
										Available on request</p>
								</div>
								
						</div>
						
						<div class ="mid2">
						
						    <div class= "pic1">
							
						     <img src="../imagee/3g.jpg" alt="Logo"></img>
							 
						    </div>
							
							</br>
						   
								<div class="pic2">
									<ul> 
									  
									   <a href="../imagee/s-3g.jpg" class="headertext "><img src="../imagee/s-3g.jpg"></a> 
									   <a href="../imagee/s-3g.jpg" class="headertext "><img src="../imagee/s-thumb4.jpg"></a>
								       <b><a href="../imagee/s-3g.jpg" class="headertext "><img src="../imagee/s-thumb5.jpg"></a></b>
									   <b><a href="../imagee/s-3g.jpg" class="headertext "><img src="../imagee/s-thumb6.jpg"></a></b>
									
									</ul>
								</div>
						</div>
						   
						</div>
					 
					</div>	

					
									
									
									
							
					   
                          
                         
				  
				
				  

		        </div>
				<div class="footer" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
				  </div>
				
			</div>
		
		</div>
		
//for uploaded the image
	</body>
</html>