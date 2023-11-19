<?php
session_start();

require_once '../Include/Connect/dbcon.php';

try {
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["Visitor"])) {
        $FullName = $_POST['FullName'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Purpose = $_POST['Purpose'];

        $pdoQuery = "INSERT INTO visitor (FullName,Email, Contact , Purpose ) VALUES (:FullName, :Email, :Contact, :Purpose)";

        $pdoResult = $pdoConnect->prepare($pdoQuery);

        $pdoExec = $pdoResult->execute([
            ":FullName" => $FullName,
            ":Contact" => $Contact,
            ":Purpose" => $Purpose,
            ":Email" => $Email,
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
