<?php
 session_start();
if(isset($_GET['id'])){

    if(isset($_GET['quantity'])){
        $quantity = $_GET['quantity'];
    }else{
        $quantity = 1;
    }
     $id = $_GET['id'];

   $_SESSION['cart'][$id] = array('quantity' => $quantity);
 
   echo '<pre>';
   print_r($_SESSION['cart']);
   echo '</pre>';
 }
?>