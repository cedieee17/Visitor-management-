<!DOCTYPE html> 
<html>

<head>
	<title>Add nd Display - by: Red</title>
	<meta charset="UTF-8">
	<link rel="Stylesheet" type="text/css" href="../Include/Styles/Styles.css">
</head>

<body>

<div class="container">
	<h1>Welcome to CUD OPERATIONS</h1>
	<p>This is the landing page for your project. You can customize it as needed.</p>
</div>

</html>


<?php

require_once("../Include/Connect/dbcon.php");

if (isset($_GET['id'])) {
	$pdoQuery = "DELETE FROM tbuser WHERE id = :id";
	$pdoResult = $pdoConnect->prepare($pdoQuery); 
	$pdoResult->execute(array(':id' => $_GET['id']));

	header('location:read.php');
} else {
	echo "Invalid request. Please provide a valid id.";
	}

$pdoConnect = null;
?>