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
        <a href="#" class="logo"><img src="img/home1.png" alt=""><p>Home</p></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
          
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
        </ul>
           
           <p> <?php echo "Welcome, " . $username;?></p>
        

           <div class="header-btn">
            <a href="index.php" class="log-out">Logout</a>
        </div>
        <a href="cart.php" class="logo"><img src="img/cart.png" alt=""></a>
        
        </header>
        <section class="home" id="home">
        <div class="home-text">
           <h1> <span>Welcome,  <?php echo "''$username''";?> to </span></h1>
            <h1> Coffee with Books</h1>
            <h2>There' a little love  <br>in every cup</h2>
            
        </div>
        <div class="home-img">
            <img src="img/home.png" alt="">
        </div>
        </section>
        <section class="shop" id="shop">
        <div class="heading">
            <span>Shop Now</span>
            <h1>Shop Coffee</h1>
        </div>
        <div class="shop-container">
        <?php
            $res=mysqli_query($conn,"select * from product");
            while($rs=mysqli_fetch_array($res)){
                ?>

            
            <div class="box">
                <div class="box-img">
                    <img src="image/<?php echo $rs['img']; ?>" alt="">
                </div>
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>  
                </div>
                <h2><?php echo $rs['pname']; ?></h2>
                <span>&#8377;<?php echo $rs['price']; ?></span>
                <a href ='test.php?id=<?php echo $rs['id']?>'> add </a>
                <input type="text" name="quantity">qty</input>
                
                <!--<a href="#" class="btn">Add to Cart</a>-->
            </div>
            <?php
            }
            ?>
            <?php
            if(isset($_POST['cart'])){

                $name=$_POST['pname'];
               
                $image=$_FILES['img']['name'];
                
                $price=$_POST['price'];
                
            
                move_uploaded_file($_FILES['img'] ['tmp_name'],'image/'.$image);
                
                $sql="insert into cart (pname,price,img) values ('$name','$price','$image')";
                $res1=mysqli_query($conn,$sql);
            
                if($res1){
                echo "<script>alert('added to cart');</script> ";
                }
            }
            
            
            
            ?>
            <!--<div class="box">
                <div class="box-img">
                    <img src="img/shop2.png" alt="">
                </div>
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>  
                </div>
                <h2> Chocolate Iced Coffee</h2>
                <span>₹ 140</span>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/shop3.png" alt="">
                </div>
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>  
                </div>
                <h2>Creamy Iced Coffee</h2>
                <span>₹ 110</span>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/shop2.png" alt="">
                </div>
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>  
                </div>
                <h3>Chocolate Peanut Butter Iced Coffee</h3>
                <span>₹ 180</span>
                <a href="#" class="btn">Order Now</a>
            </div>
        </div>-->
        <?php

        
        ?>
        </section>
        <section class="contact" id="contact">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
        <div class="links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
            <a href="#">our company</a>
        </div>
        <p>&#169; Jitendra Rana All Rights Reserved.</p>
    </section>
        <script src="script.js"></script> 
</body>
</html>