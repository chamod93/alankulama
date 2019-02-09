<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Alankulama Resuterant</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<script type="text/javascript">
	/*	
		function Validateform()
		{
			
			var fname = document.forms["form1"]["firstname"].value; 
			var lname = document.forms["form1"]["lastname"].value;
			var gender = document.forms["form1"]["gender"].value;
			var address = document.forms["form1"]["address"].value;
			var city = document.forms["form1"]["city"].value;
			var nationality = document.forms["form1"]["nationality"].value; 
			var dob = document.forms["form1"]["dob"].value; 
			var mobile = document.forms["form1"]["mobile"].value; 
			var username = document.forms["form1"]["username"].value;
			var password = document.forms["form1"]["password"].value;
			var con_password = document.forms["form1"]["con_password"].value;
			
			
			if(fname=="")
			{
				alert("Please fill the first name");
				return false;
			}
			
			else if(lname == "")
			{
				alert("Please fill the last name ");
				return false;
			}
			
			else if(gender == "")
			{
				alert("Please fill the gender");
				return false;
			}
			
			else if(address=="")
			{
				alert("Please fill the address");
				return false;
			}
			
			else if(city =="")
			{
				alert("Please fill the city");
				return false;
			}
			
			else if(nationallity == "Select")
			{
				alert("Please select the nationality");
				return false;
			}
			
			else if(dob == "")
			{
				alert("Please fill the dob");
				return false;
			}
			else if(mobile =="")
			{
				alert("Please fill the mobile no.");
				return false;
			}
			
			else if(username =="")
			{
				alert("Please fill the username");
				return false;
			}
			
			
			else if(password == "")
			{
				alert("Please fill the password");
				return false;
			}
			
			else if(con_password =="")
			{
				alert("Please fill the confirmation");
				return false;
			}
			
			else if(password != con_password)
			{
				alert("Please check your confirmation");
				return false;
			}
		
		}
		
		*/
		</script>
	
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<font size="55" color="white" family="'Times New Roman', Georgia, Serif">Alankulama Restuarant</font>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="rooms.html">Rooms</a>
						</li>
						<li>
							<a href="dives.html">Facilities</a>
						</li>
						<li>
							<a href="foods.html">Food</a>
						</li>
						<li>
							<a href="news.html">Must See</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1 align="center">Registration Page</h1>
							<form name="form1" action="" method="post" >
								<table>
									<tbody>
										<tr>
											<td>First Name:</td>
											<td><input type="text" class="txtfield" name="firstname" id="firstname" size="30">
											<div id="fname_error" class="val_error"></div>
											</td>
										</tr> <tr>
											<td>Last Name:</td>
											<td><input type="text" class="txtfield" name="lastname" id="lastname" size="30">
											
											</td>
										</tr><tr>
											<td>Gender</td>
											<td><input type="radio" name="gender" value="male">Male<br>
												<input type="radio" name="gender" value="female">Female<br>
												</td>
										</tr><tr>
											<td>Address:</td>
											<td><textarea name="address" rows="4" cols="30" ></textarea></td>
										</tr> <tr>
											<td>City:</td>
											<td><input type="text" class="txtfield" name="city" id="city" size="30">
										</tr><tr>
											<td>Nationality</td>
											<td>
											<select name="nationality">
												<option name="select">Select</option>
												<option name="sinhala">Sinhala</option>
												<option name="tamil">Tamil</option>
												<option name="muslim">Muslim</option>
												<option name="christian">Christian</option>
											</select>
											</td>
										</tr><tr>
											<td>Date of Birth:</td>
											<td><input type="date" class="txtfield" name="dob" id="dob" size="10">
										</tr><tr>
											<td>Mobile No:</td>
											<td><input type="phone" class="txtfield" name="mobile" id="mobile" size="15">
										</tr><tr>	
											<td>Username:</td>
											<td><input type="text" class="txtfield" name="username" id="username" size="20"></td>	
										</tr> <tr>
											<td>Password:</td>
											<td><input type="password" name="password" class="txtfield" id="password" size="20"></td>
										</tr><tr>
											<td>Confirm Password: </td>
											<td><input type="password" name="con_password" class="textfield" id="con_password" size="20"></td>
										</tr><tr>
											<td><input type="submit" value="Register" class="btn"></td>
										
											<td><input type="reset"  value="Reset" class="btn"></td>
										</tr>
									</tbody>
								</table>
								<br>
								<br>
								<br>
								<h3>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="rooms.html">Rooms</a>
					</li>
					<li>
						<a href="dives.html">Facilities</a>
					</li>
					<li>
						<a href="foods.html">Food</a>
					</li>
					<li>
						<a href="news.html">Must See</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© B.S Illangasinghe @ Rajarata University of Sri Lanka. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>


<?php
	
	if(isset($_POST['submit']))
	{
	
		$con = mysqli_connect("localhost","root","","alankulama");
		
		if(!$con)
		{
			echo "Not connected to the server";
		}
			
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$address = $_POST['address'];
			$city= $_POST['city'];
			$nationality = $_POST['nationality'];
			$dob = $_POST['dob'];
			$mobile = $_POST['mobile'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$con_password = $_POST['con_password'];
			
			/*
			$sql = "INSERT INTO register(firstname, lastname, gender, address, city, nationality, dob, mobile, username, password, con_password) VALUES ('$fname','$lname','$gender','$address','$city','$nationality','$dob','$mobile','$username','$password','$con_password') ";
		
			if(!mysqli_query($con,$sql))
			{
				echo "<h3>student data is not inserted</h3>";
			}
			else
			{
				echo "Inserted";
			}
			*/
	
		echo $fname;
		echo $lname;
		echo $gender;
		echo $address;
	}
?>