<?php
include 'header.php';
?>

	
	<?php
	

	include 'connection.php';
	
	echo "<h2>All Checked Out Instruments in the Database</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE Issued_to IS NOT NULL ORDER BY InstCase ASC";
	
	include 'instrumentTableCheckInOut.php';

	
	?>
	
<?php
include 'footer.php';
?>