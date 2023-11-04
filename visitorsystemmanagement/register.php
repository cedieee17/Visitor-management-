<?php
session_start();

require_once './Include/Connect/dbcon.php';

try {

$pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

if (isset($_POST["register"])) {

$UserName = $_POST['regUserName'];
$Password = password_hash($_POST['regPassword'], PASSWORD_DEFAULT);

$FullName = $_POST['regFullName'];

$pdoQuery= "INSERT INTO 'student (UserName, 'Password', 'FullName') VALUES (:UserName, :Password, :FullName)";

$pdoResult = $pdoConnect->prepare($pdoQuery);

$pdoExec = $pdoResult->execute([

":UserName" => $UserName,

":Password" => $Password, ":FullName" => $FullName,
]);

if ($pdoExec) {

header("location:Index.php");

} else {

echo 'Failed to register user.';
}
}
} catch (PDOException $error) {
$message = $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">

<meta name="Viewport" content="width = device-width, initial-scale=1.0">

<title>Welcome to our website</title>

<link rel="Stylesheet" type="text/css" href="./Include/Styles/Styles.css">

</head>

<body>

<div class="container">

<title>User Registration</title>

</div>

<h2>User Registration</h2>

<form method="POST">

Username: <input type="text" name="regUserName"> <br />

Password: <input type="password" name="regPassword"> <br />

Full Name: <input type="text" name="regFullName"> <br />

<input type="submit" name="register" value="Register">

</form>
</html>
