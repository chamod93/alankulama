

<style>
label{color:#000000;display:inline-block;width:100px;margin-bottom:10px;}
h1{color:#000000;}
</style>


	<form method="post" action="Process.php">
		<h1 align="center">Select a room for you...</h1><br>
		<label>Date</label>
		<input type="date" name="Date" />
		<br />
		<label>Customer Name</label>
		<input type="text" name="CusName" />
		<br />
		<label>Customer Address</label>
		<input type="text" name="CusAdd" />
		<br />
		<label>Customer TP No.</label>
		<input type="text" name="CusTPNo" />
		<br />
		<label>Type of Rooms<br>(First Class<br>/ Deluxe<br>/ Suite Rooms)</label>
		<input type="text" name="RoomType" />
		<br />
		<label>Number of Rooms</label>
		<input type="text" name="RoomNumber" />
		<br />
		<label>Anything that you want to know</label>
		<input type="text" name="Anything" />
		<br /><br />
		<input type="submit" value="Add a room">
	</form>
	<br>
	<br>

<?php ob_end_flush(); ?>