<?php
include 'header.php';
?>

<?php
echo "
<h2>Add Instrument Details Here</h2>
<form action='addInstrumentConfirm.php' method='POST'>
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
<input name='Submit' type='submit' value='Add Instrument' style='height:50px;'>

<p>
</form>";

?>



<?php
include 'footer.php';
?>