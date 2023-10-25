
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
					
					<div class="intop">
					       <p></br> </br></p>
					     <p style="padding-bottom:15px; font-size:32px";>Bag pack<p>
					</div>
					<div class="inmid"></br>
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
									
									echo"
									 <div class ='mid1' style='color:#606060 '>
										<div class='section client'>
								          <p></br> </p>
										  <p style='font-size:19px'>$product </br>
										</div></br>
										<div class='section'>
								        <p style='font-size:21px'>$article </br></p>
										<p>The Journalcase is an Office Bag with dual pockets.
										The Journalcase is designed to fit all your Apple notebooks or their PC equivalents</p></br>
										<p style='font-size:22px'>Journalcase features:</p></br>
							            </div>
										<div class='section'>
								          <p style='font-size:16px'>$description </p>
							            </div></br></br>
										<div class='section'>
										<p style='font-size:21px'>Dimensions</p>
										<p> xx xx xx cm <br />
										Available on request</p>
								</div>
								
									 </div>
									 <div class ='mid2'>
										<div class= 'pic1'>
										<img src='image/$image1' max-height='95%' width='97%'style='border: 7px double white' ></img>
										
										</div></br></br>
										<div class='pic2'>
											<img src='image/$image2' height='60%' width='20%'style='border: 7px double white'></img>
											<img src='image/$image3' height='60%' width='20%'style='border: 7px double white'></img>
											<img src='image/$image4' height='60%' width='20%' style='border: 7px double white'></img>
											<img src='image/$image5' height='60%' width='20%'style='border: 7px double white'></img>
										</div>
							
									 </div>
									 ";
							  
								}}
								?>	
					</div>	
		        </div>
				<div class="footer" align="right">
						<code >&copy;2011 by Leatherhub. All right reserved.</code>
				  </div>
			</div>
		
		</div>
	</body>
</html>




