<!DOCTYPE html>
 <html Lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome to PRJ</title>
   <link rel="Stylesheet" type="text/css" href="../Include/Styles/Styles.css">
   </head>
   <body>
    <div class="container">
      <h1>VISITOR SYSTEM MANAGEMENT<h1>
      </div>
 
      <?php
      require_once '../Include/Connect/dbcon.php';
      session_start();

      if (!isset($_SESSION["UserName"])) {
        echo '<h3>Login Success, Welcome - ' . $_SESSION["UserName"] . '</h3>';
        echo <'br /><br /><a href="/VISITORSYSTEMMANAGEMENT/Home.php">Home</a>';
        echo <'br /><br /><a href="/VISITORSYSTEMMANAGEMENT/dropdown.php">Sample Drop-down Menu</a>';
        echo <'br /><br /><a href="/VISITORSYSTEMMANAGEMENT/Audit_Trail.php">Audit Trail</a>';
        echo <'br /><br /><a href="/VISITORSYSTEMMANAGEMENT/logout.php">Logout</a> <br> <br>';
      }else {
         header("location:Index.php");
      }

      if (!empty($_POST["modify"])) {
        
       $userName = htmlspecialchars($_POST['User']);
       $password = password_hash($_POST['Pass'], PASSWORD_DEFAULT);
       $FullName = htmlspecialchars($_POST['FName']);

    
       $pdoQuery = $pdoConnect->prepare("UPDATE tbuser SET UserName = :userName, PassWord =:password, FullName = :fullName WHERE id = :id");
       $pdoResult = $pdoQuery->execute(array(
        ':userName' => $userName,
        ':password' => $password,
        ':fullName' => $fullName,
        ':id' => $_GET["id"]
        ));
    }

        if ($pdoResult) {
        $pdoQuery = "INSERT INTO 'audit_trail'('action') VALUES ('User update')";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();

        header('location:Read.php');
       }

      $pdoQuery = $pdoConnect->prepare("SELECT * FROM tbuser WHERE id = :id");
      $pdoQuery->execute(array(':id' => $_GET["id"]));
      $pdoResult = $pdoQuery->fetchALL();
      $pdoConnect = null;
      ?>

      <br>
      <form action="Update.php?id=<?php echo $_GET["id"]; ?>" method="post">
      Username: <input type="text" name="User" value="<?php echo $pdoResult[0]['UserName']; ?>" required placeholder="UserName"><br><br>
      Password: <input type="password" name="Pass" value=""required placeholder="Password"><br><br>
      Fullname: <input type="Text" name="Fname" value="<?php echo $pdoResult[0]['FullName']; ?>" required placeholder="UserName"><br><br>
      <input type="submit" name="modify" value="Update">
      </form>
      <br>
      </body>
  
      </html>