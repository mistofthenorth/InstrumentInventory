<?php
include 'header.php';
?>


<?php
$PK = $_POST["rowPK"];
$name = $_POST["name"];
$notes = $_POST["notes"];

	include 'connection.php';
	echo "<h2>Confirm Check Out </h2>";
	$con->autocommit(FALSE);
	if ($notes == ""){
	$runUpdate = "UPDATE Inventory SET Issued_to = '$name' WHERE PrimaryKey = $PK";
	$con->query($runUpdate);
	}
	else{
	$runUpdate = "UPDATE Inventory SET Issued_to = '$name', Notes = '$notes' WHERE PrimaryKey = $PK";
	$con->query($runUpdate);
	}
	
	$updateTransactions = "INSERT INTO Transactions (`IntPK`, `Issued_to`,`CheckOut`, `CheckIn`) VALUES ($PK,'$name',NOW(),NULL)";
	$con->query($updateTransactions);
  $getPK = "SELECT LAST_INSERT_ID();";
  $transactionQuery = $con->query($getPK);
 	$transactionPK = $transactionQuery->fetch_array();
	$genPK = $transactionPK[0];
	$addTransactionFKQuery = "UPDATE Inventory SET TransactionFK = $genPK WHERE PrimaryKey = $PK";
	$con->query($addTransactionFKQuery);
	
	$con->commit();

	//echo "<h3>$genPK</h3>";
	$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
	include 'instrumentTable.php';



?>



<?php
include 'footer.php';
?>