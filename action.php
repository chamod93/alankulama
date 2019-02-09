<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("register") or die ("no db found");
	
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
	
	$sql = "INSERT INTO register(firstname, lastname, gender, address, city, nationality, dob, mobile, username, password, con_password) VALUES ($fname,$lname,$gender,$address,$city,$nationality,$dob,$mobile,$username,$password,$con_password) ";
	
	if(mysql_query($sql))
	{
		echo "<h3>student data is inserted</h3>";
	}
	else
	{
		echo "not Inserted";
	}

	




 ?>