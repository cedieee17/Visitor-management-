<?php
session_start();

if (!isset($_SESSION["UserName"])) {
    header("location:Index.php");
    exit;
}

require_once './Include/Connect/dbcon.php';

 $Username = $_SESSION["UserName"];

 try{
    $pdoQuery = "SELECT * FROM tbuser WHERE UserName = :UserName";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute(['UserName' => $UserName]);
    $user = $pdoResult->fetch();
  } catch (PDOException $error)
   {
     echo $error->getMessage();
     exit;
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
        <title>User Dashboard</title>
        <link rel="Stylesheet" type="text/css" href="./Include/Styles/Styles.css">
      </head>
      <body>
           <div class="container">
             <h1>Welcome to our website </h1>
              <p>This is the landing page of our project.</p>

              <br />

              </div>

              <h3 Align ="center">Welcome, <?php echo $UserName; ?>!</h3>
              <!-- <div>
                   <p>User Information:</p>
                   <ul>
                    <Li><strong>Username:</strong> <?php echo $uswer['UserName']; ?></Li>
                    <Li><strong>Full Name:</strong> <?php echo $uswer['FullName']; ?></Li>
                   </ul>
              </div> -->
              <br>
              <a href="./CRUD/read.php">Add User</a><br>
              <a href="dropdown.php">Sample Drop-down Menu</a><br>
              <a href="Audit_Trail.php">Audit Trail</a><br>
              <a href="logout.php">Logout</a>

</body>
</html>