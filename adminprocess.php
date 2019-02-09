<?php 

$connect=mysqli_connect('localhost','root','','dbtest');
      echo 'Connected Successfully<br>';
      if(mysqli_connect_errno($connect)){
      echo 'Failed to connect';
   }

$username=$_POST['userName'];
$useremail=$_POST['userEmail'];
$userpassword=$_POST['userPass'];


$sql="INSERT INTO admins(userName,userEmail,userPass)
            VALUES('$username', '$useremail', '$userpassword')";
            
if($connect->query($sql)===TRUE){
   
   echo ".<b>We added the new admin.Thank you.</b>."; ?>
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