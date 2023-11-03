<!DOCTYPE html>
<html Lang="en">
<head>
<meta charset="UTF-8">
<meta name="Viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Page</title>
<link rel="Stylesheet" type="text/css" href="./Include/Styles/Styles.css">
</head>
<body>
<div class="container">
<h1>Welcome to Dropdown Page</h1>
<p>This is the Dropdown Page of our website.</p>
</div>
</body>
</html>
<?php
session_start();

if(isset($_SESSION["Email"]))
{
echo '<h3>Welcome, '.$_SESSION["Email"].'</h3>';

echo '<br /><br /><a href="/VISITORSYSTEMMANAGEMENT/Home.php">Home</a>';
echo '<br /><br /><a href="/crud/Read.php">Add User</a>';
echo '<br /><br /><a href="/Audit_Trail.php">Audit Trail</a><br>';
echo '<br /><br /><a href="/VISITORSYSTEMMANAGEMENT/logout.php">Logout</a>';

echo "<br><br><br><br><br><br><br>";
echo "Select Email";

$pdoConnect = new PDO("mysql:host=localhost;dbaname=dbtest","root","");
$pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdoQuery = "SELECT Email FROM tbuser";

$pdoResult = $pdoConnect->query($pdoQuery);

$dropdown = "<select name='users'>";
foreach ($pdoResult as $row){
$dropdown .="\r\n<option value='{$row['Email']}'>{$row['Email']}</option>";
}
$dropdown .="\r\n</select>";
echo $dropdown;
echo '</select>';

echo "<br><br><br><br><br><br><br>";
echo "This is a sample code to fetch data from a database and display it on a dropdown menu";
}
else
{
header("location:Index.php");
}
?>