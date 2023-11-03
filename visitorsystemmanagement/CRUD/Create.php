<?php

if (isset($_POST['insert'])) {
	try {
		$pdoConnect = new PDO("mysql:host=localhost;dbname=dbtest", "root", "");
		$pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $exc) {
		echo $exc->getMessage();
		exit();
}

$User = $_POST['User'];
$Pass = password_hash($_POST['Pass'], PASSWORD_DEFAULT);
$Fname = $_POST['FName'];

$pdoQuery = "INSERT INTO `tbuser` (`UserName`, `Password`, `FullName`) VALUES (:User, :Pass, :FName)"; 
$pdoResult $pdoConnect->prepare($pdoQuery);
$pdoExec = $pdoResult->execute(array(":User" => $User, ":Pass" => $Pass, ":FName" => $Fname));


if ($pdoExec) {

	$pdoQuery = "INSERT INTO `audit_trail` (`action`) VALUES ('User created')"; 
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoResult->execute();

	$pdoQuery = 'SELECT * FROM tbuser';
	$pdoResult = $pdoConnect->prepare($pdoQuery);
	$pdoResult->execute();

	while ($row = $pdoResult->fetch()) {
		echo $row['id'] . " | " .$row['UserName'] . "|" . $row['Password'] . "|" . $row['FullName'] . "<br/>";
	}

	header("Location: read.php");
	exit;
} else {
	echo 'Data Not Inserted';
	}
}
$pdoConnect = null;
?>
