<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Alankamandawa Resuterant</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	 
	
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<font size="55" color="white" face="Rockwell">
					Alankamandawa Restaurant
					</font>
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
						<div id="contact_login" class="body">
						<h1 align="center">Login Page</h1>
						
						<div  style="border-style:solid">
							
							
							<?php
								include("LogIn.php");
							?>

							<br>
							<br>
							<br>
							</div>
							<br>
							<div  style="border-style:solid">
							<h3 >
							
							<a href="admin1.php" style="text-decoration:none">Please click here to Administrator login</a>
							</h3>
							</div>
							<br>
							<div style="border-style:solid">
		<form method="post" action="userprocess.php" autocomplete="off">
		<h1 align="center">Sign Up</h1><br>
		<table>
		<tr>
			<td>
			<label>User Name:</label>
			</td>
			<td>
			<input type="text" name="userName" />
			</td>
		</tr>
		<tr>
			<td>
			<label>User Email: </label>
			</td>
			<td>
		<input type="text" name="userEmail" />
			</td>
		</tr>
		<tr>
			<td>
			<label>User Password:</label>
			</td>
			<td>
			<input type="text" name="userPass" />
			</td>
		</tr>
		</table>
		<br />
		<br />
		<br />
		<input type="submit" value="Sign Up">
		
		</form>
		<br>
		</div>
							
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
					<li class="active">
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
//<?

//get values pass from form in login.php
//$password = $_POST['pass'];

//to prevent mysql injection
//$password = stripslashes($password);
//$username = mysqli_real_escape_string($con,$username);
//$password = mysqli_real_escape_string($con,$password);
/*
//connect to the server and select the database
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"alankulama");

//Query the database for user 
$result = mysqli_query("SELECT * FROM register WHERE username = '$username' AND password = '$password'")
			or die("Failed to query database".mysqli_error($con));

$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password']== $password){
	echo "Login Success!!! Welcome".$row['username'];
}else{
	echo "Failed to login";
}
			
?>
*/