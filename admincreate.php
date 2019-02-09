<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alankamandawa Web Site 
	Welcome - <?php echo $userRow['userEmail']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
						<li >
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
	<div id="body">
		<div id="background">


	<form method="post" action="adminprocess.php">
		<h1 align="center">Alankulama Hotel Administration Page - Admin Create</h1><br>
		<label>User Name:</label>
		<input type="text" name="userName" />
		<br />
		<br>
		<label>User Email:</label>
		<input type="text" name="userEmail" />
		<br />
		<br>
		<label>User Password:</label>
		<input type="text" name="userPass" />
		<br />
		<br />
		<br />
		<input type="submit" value="Add an admin">
	</form>
	<br>
	<br>
	<a href="RegPage2.php">Back</a>
	<br>
	<br>
	<form method="GET" action="Logout.php">
					<input type="submit" value="logout">
					<input type="hidden" name="logout" value="">
					<br /><br />
				</form>

<?php ob_end_flush(); ?>




<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
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
					<a href="#" target="_blank" class="pinterest"></a> <a href="#" target="_blank" class="facebook"></a> <a href="#" target="_blank" class="twitter"></a> <a href="#" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© B.S Illangasinghe @ Rajarata University of Sri Lanka. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>