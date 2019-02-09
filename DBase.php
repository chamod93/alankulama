<?php
$connect=mysqli_connect('localhost','root','','regcustomer');
		echo 'Connected Successfully<br>';
		if(mysqli_connect_errno($connect)){
		echo 'Failed to connect';
	}
?>