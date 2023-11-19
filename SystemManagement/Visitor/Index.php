<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href= "style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form method = "POST" action="function.php">
    <div class="container">
        <div class="box">
            <h3>Visitor</h3>
        <div class="name">
            <i class='bx bx-user'></i>
            <input type="text" placeholder="Name" name="FullName" required>
        </div>
        <div class="email">
            <i class='bx bx-envelope' ></i>
            <input type="text" placeholder="Email" name="Email" required>
        </div>
        <div class="number">
            <i class='bx bxs-contact'></i>
            <input type="number" placeholder="Contact Number" name="Contact" required>
        </div>
        
        <div class="message-box">
            <textarea name="Purpose" cols="30" rows="10"
            placeholder="Message"></textarea>
        </div>
        
        <div class="button">
        <button type="Submit"name="Visitor">Submit</button>
</div>
        </div>
        </div>
    </div>
   </form> 
</body>
</html>
