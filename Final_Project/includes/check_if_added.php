<?php

function check_if_added_to_cart($product_id){
    require 'common.php';
    
    $user_id= $_SESSION['id'];
    
    $query_1= "SELECT * FROM users_products WHERE user_id='$user_id' AND product_id='$product_id' and  status= 'Added to Cart' ";
    $query_1_result = mysqli_query($con, $query_1);

    $rows = mysqli_num_rows($query_1_result);
    
    if ($rows >= 1) {
        return 1;
    }
 else {
        return 0;
    }
}
?>