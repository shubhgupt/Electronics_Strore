<?php
require 'includes/common.php';
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
    $user_id = $_SESSION['id'];
    $query = "SELECT products.id ,products.name,products.price FROM products JOIN users_products ON products.id = users_products.product_id WHERE users_products.user_id='$user_id' and status='Added to Cart'";
    $query_result= mysqli_query($con, $query) or die(mysqli_error($con));
    $num_rows = mysqli_num_rows($query_result);
    $coupon = "SELECT * FROM users WHERE id='$user_id' and coupon='WLCM10'";
    $coupon_result= mysqli_query($con, $coupon)or die(mysqli_error($con));
    $coupon_active = mysqli_num_rows($coupon_result);

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php include 'includes/links.php'; ?>
        <title>Cart | Electronic Gadgets</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            tbody{
                font-size: 18px;
                color: #d58512;
                
            }
            th{
                font-size: 18px;
                color:  #d58512;
            }
            .tr_style{
                color: #fff;
                font-size: 16px;
            }
        </style>
    </head>
    <body style="padding-top: 70px;">
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid background_img">
        <div class="container content">
          <?php if($num_rows!=0){?>
            <div class="row">
                <div class="col-md-offset-3 col-md-6 ">
                    <div class="table-wrapper-scroll-x my_custom_nav">
                    <table class="table table-responsive mb-0">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody >
                           <?php
                            $sum= 0 ; 
                            while($row= mysqli_fetch_array($query_result)){
                              $sum += $row['price'];  
                              $id= $row['id'];
                            ?>
                            <tr class="tr_style">
                                <td><?php echo "#".$row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo '<a href="cart_remove.php?id='.$id.'" class="btn btn-danger">Remove</a>';?></td>
                            </tr>
                            <?php }
                            ?>
                            <?php if ($coupon_active != 0) {?>
                            <tr>
                                <td></td>
                                <td>Total Amount to be Paid</td>
                                <td><?php echo "<del class='error'>Rs ".$sum."</del><br><span class=success>Rs ".$sum*0.9."</span>"; ?></td>
                                <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                            </tr>
                            <tr>
                                <td colspan="4"><h4 class="success"><i>Welcome Coupon Is Applied You Saved Extra 10% On Your Purchase!</i></h4></td>
                            </tr>
                            <?php }
                            else { ?>
                            <tr>
                                <td></td>
                                <td>Total Amount to be Paid</td>
                                <td><?php echo '<span class="success">Rs '.$sum.'</span>'; ?></td>
                                <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
          <?php }
            else { ?>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="jumbotron jumbo_style">
                        <h2>Your Cart Is Empty, Add Items to the Cart First!</h2><hr>
                        <h4>To Purchase any Product just <a href="home.php">Click Here</a></h4>
                    </div>
                </div>    
            </div>    
            <?php } 
            ?>
        </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>

