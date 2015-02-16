<html>
		<head>
		<title>admin login</title>
	
		<link rel="stylesheet" type="text/css" href="include/style.css"/>

		</head>
	<body>
		<div class="wrapper">
			<?php
				include_once('include/header.php');
			?>		
		<div class="content_area">
			<div class="redline">
			</div>

			<div class="left_content">
		
		
				<div class="para">
						<p>Home</p>
						<p>Reports</p>
					
					<div class="list">
					
					<ul>
						<li>Donor's overall report</li>
						<li>Donor's Organization</li>
						<li>Donor's overall report</li>
					</ul>
											
					
					</div>
				
					<div class="box">
						<p><font color="#7D2420" face="times new roman">You Have added </font></p><br />
						<p> <font color="red" face="times new roman">333</font><font color="#7D2420" face="times new roman">Donors</font></p><br />
						<p> <font color="#7D2420" face="times new roman">You Have managed </font></p><br />
						<p> <font color="red" face="times new roman">333</font> <font color="#7D2420" face="times new roman">Donors</font> </p><br />
						<p> <font color="#7D2420" face="times new roman">You have Donated</font></p><br />
						
						<p> <font color="red" face="times new roman">5</font><font color="#7D2420" face="times new roman">times this year</font> </p><br />
					</div>
				</div>
			</div>
			
			<div class="right_content">
				<h1 class="h1">
					Recently added Donors				
				</h1>
							<table class="table1">
								<tr>
									<th>Group</th>
									<th>Name</th>
									<th>District</th>
									<th>Thana</th>					
									<th>Union</th>
									<th>Word</th>
									<th>Action</th>								
								</tr>		
								<tr>
									<td>A+</td>								
									<td>Mr. Ibn Rafique</td>								
									<td>Dhaka</td>								
									<td>Mirpur</td>								
									<td>Dhaka South</td>								
									<td>24</td>								
									<td><span class="check"></span></td>					
								</tr>
								<tr>
									<td>A+</td>								
									<td>Mr. Ibn Rafique</td>								
									<td>Dhaka</td>								
									<td>Mirpur</td>								
									<td>Dhaka South</td>								
									<td>24</td>								
									<td><span class="check"></span></td>					
								</tr>
								<tr>
									<td>A+</td>								
									<td>Mr. Ibn Rafique</td>								
									<td>Dhaka</td>								
									<td>Mirpur</td>								
									<td>Dhaka South</td>								
									<td>24</td>								
									<td><span class="check"></span></td>					
								</tr>
								<tr>
									<td>A+</td>								
									<td>Mr. Ibn Rafique</td>								
									<td>Dhaka</td>								
									<td>Mirpur</td>								
									<td>Dhaka South</td>								
									<td>24</td>								
									<td><span class="check"></span></td>					
								</tr>								
								
							</table>
													
						<div id="next">
								<button class="button">Next Page</button>							
							</div>	
				
				<div id="text">
							<h1> Ask a Question</h1>
							<select name="admin">
							  <option value="Tecnhnical admin">Tecnhnical admin</option>
							  <option value="Community admin">Community admin</option>
							</select> <br />
							
							<textarea name="Text1" cols="40" rows="5" placeholder="Message" ></textarea> <br/>
							<button class="button"> Ask </button>
				</div>				
				
				<div id="find_Donor">
					<p>Find a Donor</p>
					<font size="2">
					<p>
						Name: <input type="text" placeholder="Name"size="5" />
					</p>
					<p>
						District: <select name="dist">
							  <option value="Chittagong">Chittagong</option>
							  <option value="Dhaka">Dhaka</option>
							</select> <br />				
					</p>
					<p>
						Thana : <select name="dist">
							  <option value="Katawali">Katawali</option>
							  <option value="Dhaka">Dhaka</option>
							</select> <br />				
										
					</p>
					<p>
							Union : <select name="dist">
							  <option value="South Khulshi">South Khulshi</option>
							  <option value="Katawali">Katawali</option>
							</select> <br />						
					</p>
					<p>
							Ward : <input type="text" placeholder="ward" size="4" />					
					</p>
					
					</font>
					
				</div>		
				<div id="find">
					<button class="button">Find</button>				
				</div>		
						
											
			</div>
		 
		 
		 	
		</div>	
		<div class="redline">
		 
		 </div>	
			<?php
				include_once('include/footer.php');			
			?>
	</div>
</body>
</html>			
		