<?php 
include 'DBase.php';

$Date=$_POST['Date'];
$Name=$_POST['CusName'];
$Address=$_POST['CusAdd'];
$TP=$_POST['CusTPNo'];
$Type=$_POST['RoomType'];
$Number=$_POST['RoomNumber'];
$Anything=$_POST['Anything'];

$sql="INSERT INTO CustomerDetails(DeliverDate,Cusname,CusAddress,TypeofRooms,NumberofRooms,Anything,TPNo)
				VALUES('$Date','$Name','$Address','$Type','$Number','$Anything','$TP')";
				
if($connect->query($sql)===TRUE){
   
   echo ".<b>.We got your reservation. Thank you for your concern...</b>."; ?>
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