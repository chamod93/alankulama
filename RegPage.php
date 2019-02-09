<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: Index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
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
		<b>
		<?php echo "Hello ".$userRow['userName'].", Nice to see you..."; ?>
		</b>
				
		<br>
		<br>
		<b>
		<h1 align="center">
		Welcome to Alankulama Hotel Room Reservation Page
		</h1>
		</b>
		<div style="margin-left:40px">
			<?php
					include("CusInfo.php");
			?>
		</div>
			<div style="margin-left:40px">
				<form method="GET" action="Logout.php" >
					<input type="submit" value="logout">
					<input type="hidden" name="logout" value="">
					<br /><br />
				</form>
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