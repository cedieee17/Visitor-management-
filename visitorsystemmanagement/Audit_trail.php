<?php
session_start();
require_once './Include/Connect/Dbcon.php';
try {
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdoQuery = "SELECT * FROM 'audit_trail' ORDER BY 'Timestamp' DESC";
    $pdoResult = $pdoConnect->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error){
    $message = $error=>getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Audit Trail</title>
        <link rel="Stylesheet" type="Text/css" href="./Include/Styles/Styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to our website</h1>
        <p>This is the Audit Trail of our website</p>
        <br/>
</div>
</html>

<?php
if (isset($_SESSION['UserName'])){
    $UserName = $_SESSION['UserName'];
    echo '<h3 align="center">Welcome,'. $UserName . '!</h3>';
}
?>

<br>
<a href="./Crud/Read.php">Add User</a><br>
<a href="Dropdown.php">Dropdown Menu</a><br>
<a href="Audit_Trail.php">Audit Trail</a><br>
<a href="Logout.php">Logout</a>

<br>
<div class="container">
    <h2>Audit Trail Data</h2>

    <?php
    if(isset($audittraildata) && !empty($audittraildata)): ?>
    <table Border ="1">
        <tr>
            <th>Description</th>
            <th>UserName</th>
            <th>Timestamp</th>
    </tr>
    <?php foreach($audittraildata as $log): ?>
        <tr>
            <td> <? = $log['Description'] ?></td>
            <td> <? = $log['UserName'] ?></td>
            <td> <? = $log['Timestamp'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>No Audit Trail Data Available.</p>
    <?php endif; ?>
    </div>
    </body>
    </html>