<?php
include 'header.php';
?>


<?php
$PK = $_POST["rowPK"];
$notes = $_POST["notes"];

	include 'connection.php';
	echo "<h2>Confirm Check In</h2>";
	
	if ($notes == ""){
	$runUpdate = "UPDATE Inventory SET Issued_to = NULL WHERE PrimaryKey = $PK";
	$con->query($runUpdate);
	}
	else{
	$runUpdate = "UPDATE Inventory SET Issued_to = NULL, Notes = '$notes' WHERE PrimaryKey = $PK";
	$con->query($runUpdate);
	}
	
	$getInventoryFK = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	$FKresult = $con->query($getInventoryFK);
	$transactionFK = $FKresult->fetch_assoc();
	$FK = $transactionFK["TransactionFK"];
	
	$updateTransaction = "UPDATE Transactions SET CheckIn = NOW() WHERE PrimaryKey= $FK";
	$con->query($updateTransaction);

	$removeTransaction = "UPDATE Inventory SET TransactionFK = NULL WHERE PrimaryKey = $PK";
	$con->query($removeTransaction);
	

	
	$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
	include 'instrumentTable.php';



?>



<?php
include 'footer.php';
?>