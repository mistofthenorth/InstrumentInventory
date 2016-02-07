<?php
include 'header.php';
?>



<table width="100%">
<tr>
<td align="center">
<h2>View/Edit the Entire Inventory</h2>
<form action="getAllInstruments.php" method="get">

<input name="Get All Instruments" type="submit" value="Get all the Instruments">

</form>
</td>
<td align="center">
<h2>View Checked Out Instruments</h2>
<form action="allCheckedOut.php" method="get">
<input name="Get Checked Out Instruments" type="submit" value="Get Checked Out Instruments">

</form>
</td>
<td align="center">
<h2>View Checked In Instruments</h2>
<form action="allCheckedIn.php" method="get">
<input name="Get Checked In Instruments" type="submit" value="Get Checked In Instruments">

</form>
</td>
</tr>
</table>

<h2>Check In/Out via Search</h2>
<h3>Search by</h3>
<form action="getInstrumentType.php" method="post">

Instrument Type: <input name="InstrumentType" type="text">

<input name="Search" type="submit" value="Search">
</form>

<h3>Or</h3>

<form action="getCase.php" method="post">

Case #: <input name="CaseNumber" type="text">

<input name="Search" type="submit" value="Search">
</form>

<hr>

<h3>Add an Instrument to the database</h3>
<form action="addInstrument.php">
<input name="Go" type="submit" value="Add">
</form>

<hr>

<h3>View All Check Ins/Outs</h3>
<form action="allTransactions.php">
<input name="Go" type="submit" value="View">
</form>

<hr>

<?php
include 'footer.php';
?>