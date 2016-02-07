<?php
include 'header.php';
?>	
	
	<?php
	

	include 'connection.php';
	
	echo "<h2>All Instruments in the Database</h2>";
	$insertQuery = "SELECT * FROM Inventory ORDER BY InstCase ASC";
	
	include 'instrumentTableEdit.php';

	
	
	?>
	
<?php
include 'footer.php';
?>