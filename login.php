<?php
Session_start();

$conn=mysqli_connect("localhost","root","","cwb");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/3efc37e746.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="lgt" style="text-align: center; position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%);">
            <p1><span>COFFEE WITH BOOKS</span><br></p1>
        </div>
    <video autoplay loop muted plays-inline class="back-video">
            <source src="img\stock4.mp4" type="video/mp4" controllist="nodownload">
        </video>
    <div class="container">
        <span class="icon-close"><a href="index.php"><i class="fa-solid fa-x"></i></a>
        </span>
        <h2>SIGN IN</h2>
        <form method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="" required>
                <label for="">Email</label>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="" required>
                <label for="">Password</label>
                <i class="fa-solid fa-lock"></i>
                </div>
    
        <input type="submit" name="login" value="submit" id="btn">
        <p><a href="register.php">Don't have a account? Sign Up Now</a></p>
        <!--<p><a href="index.php">CANCEL</a></p>-->
    </form>
    </div>
    <?php
    if(isset($_POST['login'])){

        $email=$_POST['email'];
        $password=$_POST['password'];

        $res=mysqli_query($conn,"select * from user where email='$email' and password='$password'");
        $row=mysqli_num_rows($res);
        

        if($row == 1){

            $_SESSION['login']=true;

            $_SESSION['email']=$email;

            echo"<script>window.location.href='home.php';</script>";
        }else{
            echo"Invalid username or password";
        }
        
    }
    
    
    ?>
   

<?php
if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password entered match the default email and password
    if($email == "admin@123" && $password == "admin123") {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;

        // Redirect the admin to additem.php
        echo "<script>window.location.href='additem.php';</script>";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
</body>



</html>