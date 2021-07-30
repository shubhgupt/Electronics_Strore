<?php
require 'includes/common.php';
if(isset($_GET['id'])&& isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
    $product_id = $_GET['id'];
    $insert_query = "INSERT INTO users_products(user_id,product_id,status) VALUES('$user_id','$product_id','Added to Cart')";
    $insert_query_result= mysqli_query($con, $insert_query) or die(mysqli_error($con));
    header('location:home.php');
}
?>

