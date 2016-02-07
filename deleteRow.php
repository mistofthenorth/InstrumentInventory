<?php
include 'header.php';
?>

<?php
include 'connection.php';
$PK = $_POST["rowPK"];
//echo "$PK";

$deleteQuery = "DELETE FROM Inventory WHERE PrimaryKey = $PK";

//echo "$deleteQuery";

if ($con->query($deleteQuery)){
echo "<p>Instrument deleted successfully";
}
else{
echo "<p>Error. Instrument still in database.";
}

?>

<?php
include 'footer.php';
?>