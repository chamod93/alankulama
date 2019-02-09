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
 $res=mysql_query("SELECT * FROM admins WHERE userId=".$_SESSION['user']);
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
		<?php //echo "Hello ".$userRow['userName'].", Nice to see you..."; ?>
		</b>
				
		<br>
		<br>
		<b>
		<h1 align="left">
		Alankamandawa Hotel Administration Page
		</h1>
		</b>
		<div>
			
		<a href="RegPage2.php">Back</a>
		<br>
		<br>
		<br>
		<?php

		$connection = mysqli_connect("localhost","root","","regcustomer");

		if(!$connection)
		{
			die("connection failed:".mysqli_connect_error());

		}

		$sql = "SELECT * FROM customerdetails";

		$result = mysqli_query($connection,$sql);

		echo "<table border='1' align='center'>
		<tr><td>DeliverDate</td><td>Customer Name</td><td>Customer Address</td><td>Type of Rooms</td><td> Number of Rooms</td><td>Anything</td><td>TPNo</tr>";

		if(mysqli_num_rows($result)>0){

			while($row = mysqli_fetch_assoc($result)){

				echo "<tr><td>".$row["DeliverDate"]."</td><td>".$row["CusName"]."</td><td>".$row["CusAddress"]."</td><td>".$row["TypeofRooms"]."</td><td>".$row["NumberofRooms"]."</td><td>".$row["Anything"]."</td><td>".$row["TPNo"]."</td></tr>";
			}
		} else {

			echo "0 results";
		}

		echo "</table>";

		mysqli_close($connection);




		?>
		<div>

		</div>
				<form method="GET" action="Logout.php">
					<input type="submit" value="logout">
					<input type="hidden" name="logout" value="">
					<br /><br />
				</form>
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