<?php
include 'header.php';
?>


<?php

$CaseNumber = $_POST["CaseNumber"];
	include 'connection.php';
	
	echo "<h2>Confirm Case #</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE InstCase LIKE '$CaseNumber' ORDER BY InstCase ASC";
	
	include 'instrumentTableCheckInOut.php';



?>



<?php
include 'footer.php';
?>