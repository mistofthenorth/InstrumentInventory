<?php
include 'header.php';
?>


<?php
$PK = $_POST["rowPK"];

	include 'connection.php';
	
	echo "<h2>Confirm Check In</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
	include 'instrumentTable.php';

	echo "<br><form action='confirm.php' method='POST'><input type='hidden' name='rowPK' value=\"$PK\">
	<p>Notes (opt): <input type='text' name='notes'><p>
	<input type='submit' value='Yes, check this instrument in'></form>";


?>



<?php
include 'footer.php';
?>