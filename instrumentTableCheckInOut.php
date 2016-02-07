<?php
	$result = $con->query($insertQuery);
	
	echo "<table><th>Case #</th><th>Instrument Type</th><th>Brand</th><th>Serial #</th><th>Notes</th><th>Issued To</th>";
	
	while($row = $result->fetch_assoc()){
		$rowPK = $row["PrimaryKey"];
		$checkedOut = ((bool) $row["Issued_to"]);
		
		echo "<tr><td>".$row["InstCase"]."</td><td>".$row["Instrument"]."</td><td>".$row["Brand_Model"]."</td><td>".$row["InstSerial"]."</td><td>".$row["Notes"]."</td><td>".$row["Issued_to"];
			if ($checkedOut == False){
				echo "</td><td><form action='checkOut.php' method='POST'><input type='hidden' name='rowPK' value=\"$rowPK\"><input type='submit' value='Check Out'></form></td></tr>";
			}
			else{
				echo "</td><td><form action='checkIn.php' method='POST'><input type='hidden' name='rowPK' value=\"$rowPK\"><input type='submit' value='Check In'></form></td></tr>";
			}
	}
	
	//echo $row["Model"];
	echo "</table>";
  //echo "<br>".$result->num_rows." rows";
  //echo "<p><button onclick=\"goBack()\">Back</button>";
?>