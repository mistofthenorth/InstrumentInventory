<?php
include 'header.php';
?>


<?php
include 'connection.php';
//echo "Test";


$insertQuery = "SELECT Transactions.Issued_to, Transactions.CheckIn, Transactions.CheckOut, Inventory.Instrument, Inventory.Brand_Model, Inventory.InstSerial, Inventory.Notes, Inventory.InstCase FROM `Transactions` JOIN Inventory WHERE Transactions.IntPK = Inventory.PrimaryKey ORDER BY CheckOut DESC";

include 'instrumentTableTransactions.php';
?>

<?php
include 'footer.php';
?>