<?php
include 'header.php';
?>	
<script>
function confirmation()
{
var answer = confirm("Are you sure?")
 if (answer)
 {
  return true;
 } else {
  if (window.event) // True with IE, false with other browsers
  {
   window.event.returnValue=false; //IE specific
  } else {
   return false
  }
 }
}
</script>
<?php
$PK = $_POST["rowPK"];

	include 'connection.php';
	
	echo "<h2>Edit details below</h2>";
	$insertQuery = "SELECT * FROM Inventory WHERE PrimaryKey = $PK";
	
	include 'instrumentTable.php';
	
	

echo "<form action='editedRow.php' method='POST'>
<br>
Case: <input name='Case' type='text'> 
<p>
Instrument Type: <input name='Inst' type='text'> 
<p>
Brand: <input name='Brand' type='text'> 
<p>
Serial #: <input name='SerialNum' type='text'> 
<p>
Notes: <input name='Notes' type='text'> 
<p>
Issued to may not be altered from this page.
<p>
<input name='Submit' type='submit' value='Save' style='height:50px;'>
<input name='rowPK' type='hidden' value=\"$PK\">
<p>
</form>";


echo "<form action='deleteRow.php' method='POST'> <input name='rowPK' type='hidden' value=\"$PK\">
<input name='Search' type='submit' value='Permanently Delete This Item' style='height:50px;' onclick='return confirmation();'></form>";
?>
	
<?php
include 'footer.php';
?>