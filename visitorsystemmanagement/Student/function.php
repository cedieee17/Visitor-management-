<?php
session_start();

require_once './Include/Connect/dbcon.php';

try {

SpdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

if (isset($_POST["register"])) {

$Id = $_POST['Id'];
$Student_Id = $_POST['Student_Id'];
$Email = $_POST['Email'];
$Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
$pdoQuery= "INSERT INTO 'student ('id', 'Student_Id', 'Password', 'Email') VALUES (:Id, :Student_Id, :Email, :Password)";

$pdoResult = $pdoConnect->prepare($pdoQuery);

$pdoExec = $pdoResult->execute([

":Id" => $Id,

":Password" => $Password, ":Email" => $Email,
]);

if ($pdoExec) {

header("location:Index.html");

} else {

echo 'Failed to register user.';
}
}
} catch (PDOException $error) {
$message = $error->getMessage();
}
?>