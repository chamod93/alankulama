<?php 
$connection = mysqli_connect("localhost","root","","dbtest");

      if(!$connection)
      {
         die("connection failed:".mysqli_connect_error());

      }

$Username=$_POST['userName'];
$Useremail=$_POST['userEmail'];
$Userpassword=$_POST['userPass'];

$sql="INSERT INTO users(userName,userEmail,userPass)
				VALUES('$Username','$Useremail','$Userpassword')";
				
if($connection->query($sql)===TRUE){
   
   echo ".<b>.You added the new admin successfully. Thank you!</b>."; ?> 
   <form method="GET" action="Logout.php">
					<input type="submit" value="logout">
					<input type="hidden" name="logout" value="">
					<br /><br />
				</form>
	<?php
	include('index.html');
   //echo "


   //New record created successfully.";
   }else
   {
   echo "Error: ".$sql."<br>".$connect->error;
   }
   $connect->close();
?>