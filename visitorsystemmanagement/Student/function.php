<?php
session_start();

require_once '../Include/Connect/dbcon.php';

try {
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["register"])) {
        $StudentId = $_POST['StudentId'];
        $Email = $_POST['Email'];
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

        $pdoQuery = "INSERT INTO student (StudentId, Email, Password) VALUES (:StudentId, :Email, :Password)";

        $pdoResult = $pdoConnect->prepare($pdoQuery);

        $pdoExec = $pdoResult->execute([
            ":StudentId" => $StudentId,
            ":Email" => $Email,
            ":Password" => $Password,
        ]);

        if ($pdoExec) {
            header("location: index.html"); // Change to lowercase 'index.html'
        } else {
            echo 'Failed to register user.';
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
