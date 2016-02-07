<?php
	$result = $con->query($insertQuery);
	
	echo "<table><th>Case #</th><th>Instrument Type</th><th>Brand</th><th>Serial #</th><th>Notes</th><th>Issued To</th>";
	
	while($row = $result->fetch_assoc()){
	$rowPK = $row["PrimaryKey"];
	echo "<tr><td>".$row["InstCase"]."</td><td>".$row["Instrument"]."</td><td>".$row["Brand_Model"]."</td><td>".$row["InstSerial"]."</td><td>".$row["Notes"]."</td><td>".$row["Issued_to"]."</td><td><form action='edit.php' method='POST'><input type='hidden' name='rowPK' value=\"$rowPK\"><input type='submit' value='Edit'></form></td></tr></td></tr>";
	}
	
	//echo $row["Model"];
	echo "</table>";
  //echo "<br>".$result->num_rows." rows";
?>