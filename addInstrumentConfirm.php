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


echo "<table><th>Case #</th><th>Instrument Type</th><th>Brand</th><th>Serial #</th><th>Notes</th><th>Issued To</th><tr><td>$Case</td><td>$Inst</td><td> $Brand</td><td> $SerialNum</td><td> $Notes</td></tr></table><p>";

$addQuery = "INSERT INTO Inventory (";
		if (!empty($Case)){
			$addQuery= $addQuery." InstCase,";
		}
		if (!empty($Inst)){
			$addQuery= $addQuery." Instrument,";
		}
		if (!empty($Brand)){
			$addQuery= $addQuery." Brand_Model,";
		}
		if (!empty($SerialNum)){
			$addQuery= $addQuery." InstSerial,";
		}
		if (!empty($Notes)){
			$addQuery= $addQuery." Notes";
		}
		$addQuery = rtrim($addQuery, ",");
		$addQuery = $addQuery.")";
		
$addQuery = $addQuery." VALUES (";

		if (!empty($Case)){
			$addQuery= $addQuery." '$Case',";
		}
		if (!empty($Inst)){
			$addQuery= $addQuery." '$Inst',";
		}
		if (!empty($Brand)){
			$addQuery= $addQuery." '$Brand',";
		}
		if (!empty($SerialNum)){
			$addQuery= $addQuery." '$SerialNum',";
		}
		if (!empty($Notes)){
			$addQuery= $addQuery." '$Notes'";
		}
		$addQuery = rtrim($addQuery, ",");
		$addQuery = $addQuery.");";

//echo "$addQuery";
		
if($con->query($addQuery)){
	echo "<p>Instrument Successfully Added";
}
else{
	echo "<p>Error adding instrument";
}

?>


<?php
include 'footer.php';
?>