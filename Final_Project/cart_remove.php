<?php
require 'includes/common.php';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $user_id= $_SESSION['id'];
    $product_id = $_GET['id'];
    
    $remove_query= "DELETE FROM users_products WHERE user_id='$user_id' and product_id='$product_id'";
    mysqli_query($con, $remove_query)or die(mysqli_error($con));
    header('location:cart.php');
}
?>

