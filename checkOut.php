<?php
include 'header.php';
?>


<?php
$PK = $_POST["rowPK"];

	include 'connection.php';
	
	echo "<h2>Confirm Check Out</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
	include 'instrumentTable.php';

	echo "<br><form action='confirmCheckOut.php' method='POST'><input type='hidden' name='rowPK' value=\"$PK\"><p>Student Name: <input name='name' 
	type='text'><p>Notes (opt):<input name='notes' type='text'><p><input type='submit' value='Check this instrument out'></form>";


?>



<?php
include 'footer.php';
?>