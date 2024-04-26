<?php 
/*error_reporting(0);*/
$conn= mysqli_connect("localhost","root","","cwb");

$res=mysqli_query($conn,"select * from product");
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
</div>
        <video autoplay loop muted play-inline class="back-video">
            <source src="img\stock4.mp4" type="video/mp4" controllist="nodownload">
        </video>
        <div class="container1">
        <span class="icon-close"><a href="index.php"><i class="fa-solid fa-x"></i></a>
        </span>
        <h2>Add item</h2>
<form method="post" enctype="multipart/form-data">

product name: <input type="text" name="pname"><br><br>


Upload Image: <input type="file" name="img"><br><br>

Price:<input type="number" name="price"><br><br>

<input type="submit" name="submit" value="Submit">
</form>
    
</body>

<?php
if(isset($_POST['submit'])){

    $name=$_POST['pname'];
   
    $image=$_FILES['img']['name'];
    
    $price=$_POST['price'];
    

    move_uploaded_file($_FILES['img'] ['tmp_name'],'image/'.$image);

    $sql="insert into product (pname,price,img) values ('$name','$price','$image')";
    $res1=mysqli_query($conn,$sql);

    if($res1){
    echo "<script>alert('insert successfully');</script> ";
    }
}



?>
</html>