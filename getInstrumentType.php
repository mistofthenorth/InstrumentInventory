<?php
include 'header.php';
?>

<?php

include 'connection.php';

	$InstrumentType = $_POST["InstrumentType"];
	echo "<h2>All Instruments in the Database</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE Instrument LIKE '%$InstrumentType%' ORDER BY InstCase ASC";
	
	include 'instrumentTableCheckInOut.php';

	

?>

<?php
include 'footer.php';
?>