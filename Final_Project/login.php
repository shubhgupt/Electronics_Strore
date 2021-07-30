<?php
require 'includes/common.php'; 
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <?php require 'includes/links.php'; ?>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="padding-top: 70px;">
       <?php
        include 'includes/header.php';
        include 'login_modal.php';
        ?>
        <div class="container-fluid background_img">
            <div class="container content">
                <div class="row">
                    <div class="col-sm-offset-3 col-xs-offset-2 col-sm-6 col-xs-8">
                        
                        <h3 style="color:  rgb(240,173,78);">LOGIN</h3>
                        <p>Don't have an account? <a href="signup.php">Register Here</a></p> 
                        <form role="form" action="login_script.php" method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Email" name="email" class="form-control" required="" pattern="[a-z0-9.%_+-]+@[a-z0-9_.]+\.[a-z]{2,3}"
                                       title="emailid@xyz.com" data-toggle="tooltip">
                                 <?php if(isset($_GET['E2'])){
                                     echo "<span class='error'>".$_GET['E2']."</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                       title="Must contain One uppercase and lowercase letter with one digit and atleast 8 or more characters!"
                                       data-toggle="tooltip">

                            <?php if(isset($_GET['Error'])){
                                echo "<span class='error'>".$_GET['Error']."</span>";
                            }?>
                            </div> 
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-warning">Login</button>
                            </div>
                        </form>
                        <a href="forgot.php" >Forgot Password?</a>
                    </div>
                </div>
            </div> 
        </div>
       <?php 
       include 'includes/footer.php' ;
       ?>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    </body>
</html>


