<?php
session_start();
if (isset($_POST["Password"])){
$Pass = $_POST["Password"];
$_SESSION["Password"] = $Pass;
}
if ($_SESSION["Password"] != "run23tire"){
//header('Location : login.php');
echo "<script> window.location.replace('login.php') </script>";
}
?>
<html>
<head>
<title>Ramona Band Inventory Database
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function goBack() {
    window.location.assign('index.php');
}
</script>
</head>
<body>
<h1 align='center'>
Ramona Band Inventory Database
</h1>
<div align='center'><a href="index.php">
<img src="ramonaBandPhoto.jpg"></a>
</div>
<hr>