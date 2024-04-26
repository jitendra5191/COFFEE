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
            <!--<p1><span>COFFEE WITH BOOKS</span><br></p1>-->
        </div>
        <video autoplay loop muted play-inline class="back-video">
            <source src="img\stock4.mp4" type="video/mp4" controllist="nodownload">
        </video>
    

    <div class="container1">
        <span class="icon-close"><a href="index.php"><i class="fa-solid fa-x"></i></a>
        </span>
        <h2>SIGN UP</h2>
        <form method="post">
        <div class="form-group">
                <input type="text" name="username" placeholder="" required>
                <label for="">username</label>
                <i class="fa-solid fa-user"></i>
                </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="" required>
                <label for="">Email</label>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="" required>
                <label for="">Password</label>
                <i class="fa-solid fa-lock"></i>
                </div>
                <div class="form-group">
                <input type="text" name="phone" placeholder="" required>
                <label for="">Phone</label>
                <i class="fa-solid fa-phone"></i>
                </div>
    
            
        <input type="submit" name="login" value="submit" id="btn">
        <p><a href="login.php">Already have a account? Sign In Now</a></p>
    
    </form>
    </div>
    <?php
    if(isset($_POST['login'])){

        $email=$_POST['email'];
        $password=$_POST['password'];
        $username=$_POST['username'];
        $phone=$_POST['phone'];

        $res=mysqli_query($conn,"insert into user (username,email,password,phone) values ('$username','$email','$password','$phone')");
        
        

        if($res){

           

            echo"<script>alert('register succesfull');window.location.href='login.php';</script>";
        }else{
            echo"<script>alert('Error ');</script>";
        }
    }
    
    
    ?>
</body>



</html>