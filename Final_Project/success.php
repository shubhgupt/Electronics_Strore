<?php
include 'includes/common.php';
if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];
$select_query = "SELECT * FROM users_products WHERE user_id='$user_id'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
while ($row = mysqli_fetch_array($select_query_result)) {
    
    $product_id = $row['product_id'];
    $update_query= "UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' and product_id='$product_id' and status='Added to Cart' ";
    $udate_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
}
$update_coupon = "UPDATE users SET coupon=NULL WHERE id='$user_id'";
mysqli_query($con, $update_coupon) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/links.php'; ?>
        <title>Success | Electronic Gadgets</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php  include 'includes/header.php'; ?>
        <div class="container-fluid background_img">
            <div class="container content">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="jumbotron jumbo_style">
                            <h2>Thank You For Shopping With Electronic Gadgets!</h2><hr>
                            <p>Your Order is Confirmed. <a href="home.php">Cilck here</a> for more Shopping</p>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>    
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

