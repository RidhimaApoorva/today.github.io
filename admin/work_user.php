
<?php	
	mysql_connect("localhost","root","") or  die ("not connected to server");//connectin to server
	mysql_select_db("leatherhub") or die ("not connected to database"); //connecting to db
?>
<html>
	<head>
		<title>Work</title>
		<link rel="stylesheet" type="text/css" href="../css/er.css"/>
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
					   <b><a href="work_user.php" class="headertext" >WORK</a></b>&nbsp&nbsp&nbsp
					   <b><a href="nowcontact.html" class="headertext">CONTACT</a></b>
					</ul> 
				</div>
			</div>
			
			
			<div class="content">
				<div class="midcontent">
					
					<div class="topcontent">
					      <p class="headLine1" style="font-size:48px ">Some Of Our Work</p>
						  <br>
                           <p align="left" style="color:#606060 " > Below is a small sampling of our work.Additional samples 
                            of our Professional work for fortune and enterprise-level clients are available upon request but cannot be shown here.</p>
						
					</div></BR></br></br>
					
					<div class="bottomcontent">
						<div class="display"> 
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
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
								<p style="font-size:1.3em;">Portfolio Bag (3 Gusset)</p></br>
								
								<p style="color:#606060">Article :[LH-BG-102]</p></br>
		
								<p style="color:#606060"> Fine Cow Grain Leather</p></br>
								<p> <a href="firstbag.html">
									<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"  >
									</a>
								</p>
								
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
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
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p style="color:#606060">Article : [ LH-BG-012 </p></br>
								<p style="color:#606060">Calf Leather</p></br>
								<p> <a href="secondbag.html">
								   <img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								   </a>
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image3=$row['image3'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image3' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p  style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Calf Leather</p></br>
								<p>
								<a href="threebag.html">
								
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left">
			
								 </p>
								</a>
							</div>
						</div></br></br>
						
						<div class="display"> 
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image4=$row['image4'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image4' ></img></td>
					
		</tr>
			";
	}
?>				</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p> </br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p>
								<a href="4bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image5=$row['image5'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image5' ></img></td>
					
		</tr>
			";
	}
?>					</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="5bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p></a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image6=$row['image6'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image6' ></img></td>
					
		</tr>
			";
	}
?>					</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Calf Leather</p></br>
								<p  ><a href="6bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						
						<div class="display"> 
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image7=$row['image7'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image7' ></img></td>
					
		</tr>
			";
	}
?>				</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]<p></br>
								</p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="7bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
					<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image8=$row['image8'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image8' ></img></td>
					
		</tr>
			";
	}
?>							</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 </p></br>
								<p  style="color:#606060">Calf Leather</p></br>
								<p><a href="8bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image9=$row['image9'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image9' ></img></td>
					
		</tr>
			";
	}
?>				</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</P> </br>
								<p  style="color:#606060">Cow Nappa</p></br>
								<p><a href="9bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						
						<div class="display"> 
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image10=$row['image10'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image10' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br> 
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="10bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image11=$row['image11'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image11' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p> </br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="11bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image12=$row['image12'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image12' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br> 
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="12bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						<div class="display"> 
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image13=$row['image13'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image13' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="13bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image14=$row['image14'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image14' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br> 
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="14bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image15=$row['image15'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image15' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</P></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="16bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						<div class="display"> 
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image16=$row['image16'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image16' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p> </br>
								<p  style="color:#606060">Fine Cow Grain Leather</p>
								</br>
								<p><a href="17bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p></a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image17=$row['image17'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image17' ></img></td>
			
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</P></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="18bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image18=$row['image18'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image18' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="19bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						<div class="display"> 
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image19=$row['image19'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image19' ></img></td>
					
		</tr>
			";
	}
?>				
								
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								<p><a href="20bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image20=$row['image20'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image20' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p> </br>
								<p  style="color:#606060">Fine Cow Grain Leather</p>
								</br>
								<p>
								<a href="21bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image21=$row['image21'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image21' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p>
								</br>
								<p>
								<a href="22bag.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
							</div>
						</div></br></br>
						<div class="display"> 
							<div class="imgsize">
								<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image22=$row['image22'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image22' ></img></td>
					
		</tr>
			";
	}
?>				
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p>
								</br>
								<p><a href="l3.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p></a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image23=$row['image23'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image23' ></img></td>
					
		</tr>
			";
	}
?>					
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p>
								</br>
								<p><a href="2l.html">
									<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p></a>
							</div>
							
							<div class="imgsize">
							<?php
	$result="select * FROM `work` ORDER BY `id` DESC";
	$query=mysql_query($result);
	while($row=mysql_fetch_array($query))
	{
		$image24=$row['image24'];
		
		$id=$row['id'];
		echo "	
		<tr>
			<td><img src='image/$image24' ></img></td>
					
		</tr>
			";
	}
?>				
								
								</br></br>
								<p style="font-size:1.3em;">Office Bag</p></br>
								<p  style="color:#606060">Article : [ LH-BG-012 ]</p></br>
								<p  style="color:#606060">Fine Cow Grain Leather</p></br>
								
								<p><a href="1L1.html">
								<img class="linkimg" src="../Imagee\view-dt-btn.png" alt="Logo" align="left"></p>
								</a>
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