<?php
session_start();
require_once './Include/Connect/dbcon.php';

if (isset($_SESSION[ "Email"])) {
	$loggedInUser = $_SESSION["Email"];
	$pdoQuery = "INSERT INTO `audit_trail` (`Description`, `Email`) VALUES ('User logged out', :Email)";
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoResult->execute([':Email' => $loggedInUser]);
}

unset($_SESSION['Email']);
session_destroy();
header('location: index.php');
?>