<?php
	$result = $con->query($insertQuery);
	
	echo "<table><th>Check Out</th><th>Check In</th><th>Issued To</th><th>Instrument Case</th><th>Instrument Type</th><th>Brand</th><th>Serial #</th><th>Notes</th>";
	
	while($row = $result->fetch_assoc()){
	echo "<tr><td>".$row["CheckOut"]."</td><td>".$row["CheckIn"]."</td><td>".$row["Issued_to"]."</td><td>".$row["InstCase"]."</td><td>".$row["Instrument"]."</td><td>".$row["Brand_Model"]."</td><td>".$row["InstSerial"]."</td><td>".$row["Notes"]."</td></tr>";
	}

 	echo "</table>";

?>