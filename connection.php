<?php
	$con = new mysqli('localhost','sarahowen','run22tire');
	if (!$con){echo 'No luck';}
	//else echo 'connected successfully <br>';
	
	$con->select_db("BandInventory");
	
	//echo 'selected the Band database<br>';
	
	//echo $con->stat();
	?>