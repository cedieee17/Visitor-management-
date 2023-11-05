<?php
session_start();

require_once '../Include/Connect/dbcon.php';

try {
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["Visitor"])) {
        $FullName = $_POST['FullName'];
        $Contact = $_POST['Contact'];
        $Purpose = $_POST['Purpose'];

        $pdoQuery = "INSERT INTO visitor (FullName, Contact, Purpose) VALUES (:FullName, :Contact, :Purpose)";

        $pdoResult = $pdoConnect->prepare($pdoQuery);

        $pdoExec = $pdoResult->execute([
            ":FullName" => $FullName,
            ":Contact" => $Contact,
            ":Purpose" => $Purpose,
        ]);

        if ($pdoExec) {
            header("location: index.php");
        } else {
            echo 'Failed to register user.';
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
