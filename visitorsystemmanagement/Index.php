<?php
Session_start();

Require_once './Include/Connect/dbcon.php';

Try {
 $pdoConnect->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["login"])) {
if (empty($_POST["Email"]) || empty($_POST["Password"])) { 
$message = '<label> All fields are required </label>';
 } else {

$pdoQuery = "SELECT * FROM dbtest WHERE Email :Email";
$pdoResult = $pdoConnect->prepare($pdoQuery);
$pdoResult->execute(['Email' => $_POST["Email"]]);

$user = SpdoResult->fetch();

If ($user && password_verify($_POST["Password"], $user["Password"])) { 
    $_SESSION["Email"] = $_POST["Email"];

$loggedInUser = $_SESSION["Email"];
$pdoQuery = "INSERT INTO audit_trail('action', 'user') VALUES ('User logged in', :user)"; 
$pdoResult = $pdoConnect->prepare($pdoQuery); 
$pdoResult->execute([':user' => $loggedInUser]);
Header("location:Home.php");
} else {
$message = '<label>Wrong data</label>';
}
}
}
} catch (PDOException $error) {
$message = $error ->getMessage();
}


?>
<!DOCTYPE html>
<html>
<head>
<title>VISITOR SYSTEM MANAGEMENT</title>
<link rel=”stylesheet” type=”text/css” href=”./Include/Styles/Styles.css”>
</head>
<body>
<br />
<div style=”width:500px;”>

<?php

If (isset($message)) {
Echo '<label>'.$message.'</label>';
}
?>
<h3 Align=””>VISITOR SYSTEM MANAGEMENT</h3><br/>
<form method=”post”>
Username
<input type=”text” name="Email">
<br />
Password
<input type=”password” name=”Password”>
<br />
<input type="submit" name="login" value="Login">
</form>

<a href="register.php">  Add user</a>
</div>
<br>
</body>
</html>