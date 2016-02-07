<?php
include 'header.php';

?>

<?php

include 'connection.php';

$Case = $_POST["Case"];
$Inst =  $_POST["Inst"];
$Brand = $_POST["Brand"];
$SerialNum = $_POST["SerialNum"];
$Notes = preg_replace('/[^A-Za-z0-9]/', ' ', $_POST["Notes"]);
$PK = $_POST["rowPK"];

	$con->autoCommit(FALSE);
		if (!empty($Case)){
			$con->query("UPDATE Inventory SET InstCase = '$Case' WHERE PrimaryKey = $PK");
		}
		if (!empty($Inst)){
			$con->query("UPDATE Inventory SET Instrument = '$Inst' WHERE PrimaryKey = $PK");
		}
		if (!empty($Brand)){
			$con->query("UPDATE Inventory SET Brand_Model = '$Brand' WHERE PrimaryKey = $PK");
		}
		if (!empty($SerialNum)){
			$con->query("UPDATE Inventory SET InstSerial = '$SerialNum' WHERE PrimaryKey = $PK");
		}
		if (!empty($Notes)){
			$con->query("UPDATE Inventory SET Notes = '$Notes' WHERE PrimaryKey = $PK");
		}
	$con->commit();




//if ($con->query($query)){
//	echo "<p>Update successful";
//}
//else{
//	echo "<p>No luck on the update";
//}


$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
include 'instrumentTable.php';


?>

<?php
include 'footer.php';
?>