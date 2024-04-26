<?php
session_start();
include 'config.php';
$email=$_SESSION['email'];
if (isset($email) ){
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $username = $row['username'];
    /*echo "Welcome, " . $username;*/
} else {
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Responsive Coffee Withbooks website</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header>
<a href="#" class="logo"><img src="img/cart.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
       <!-- <ul class="navbar">
          
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#shop">Shop</a></li>
           <li><a href="#contact">Contact</a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
           <li><a href="#contact"></a></li>
        </ul>-->
           
           <p> <?php echo "Welcome, " . $username;?></p>
        

           <div class="header-btn">
            <a href="home.php" class="log-out">Back to home</a>
        </div>
        
        
        </header>
        <section class="home" id="home">
        <div class="home-text">
            
    
</body>
</html>