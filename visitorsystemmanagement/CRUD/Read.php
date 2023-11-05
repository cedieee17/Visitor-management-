<!DOCTYPE html>
<html>

<head>
<title>Read and Display Page</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../include/styles/styles.css">
</head>
<body>
<div class="conatainer">
<h1>Welcome to Read and Display Page</h1>
<p>This is the Read and Display Page for your project. You can customize it as needed.</p>
</div>

<?php
requrie_once '../include/connect/db.con.php';
session_start();

if(isset($_SESSION["UserName"])) {
echo '<h3>Welcome, ' . $_SESSION["UserName"] . '</h3>';
echo '<br /><br /><a href="/prj/home.php">Home</a>';
echo '<br /><br /><a href="/prj/dropdown.php">Sample Drop-down Menu</a>';
echo '<br /><br /><a href="/prj/audit_trail.php">Audit Trail</a>';
echo '<br /><br /><a href="/prj/logout.php">Logout</a><br /><br />';
}else{
header("location:index.php");
}

?>

<br>
<form action="create.php" method="post">
<input type="hidden" name="Id">
Username: <input type="text" name="User" required placeholder="UserName"><br>
Password: &nbsp;<input type="password" name="Pass" required placeholder="Password"><br>
FullName: <input type="Text" name="Fname" requiredplaceholder="FullName"><br><br>
&nbsp;&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,<input type="submit" name="insert" value="Save"><br<br><br>
</form>

<br>
<?php
$pdoQuery = 'SELECT * FROM tbuser';
$pdoResult = $pdoConnect->prepare($pdoQuery);
$pdoResult->execute();
echo "<table border='2' cellpadding='7'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>UserName</th>";
echo "<th>PassWord</th>";
echo "<th>FullName</th>";

echo "<th>Action</th>";
echo "<tr>";
while ($row = $pdoResult->fetch(PDO::FETCH_ASSOC)){
extract($row);
echo "<tr>";
echo "<td>$id</td>";
echo "<td>$UserName</td>";
echo "<td>$PassWord</td>";
echo "<td>$FullName</td>";

echo "<td><a href='update.php?id=$id';>Edit</a><a href='delete.php?id=$id';?>Delete</a></td>";
}
?>
</body>
</html>