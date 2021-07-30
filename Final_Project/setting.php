<?php
require 'includes/common.php';
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/links.php'; ?>
        <title>Setting | Electronic Gadgets</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid background_img">
            <div class="container content" style="padding-top: 100px;">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                        <h3 style="color: rgb(240,173,78);">Change Password</h3>
                        <form action="setting_script.php" method="post">
                            <div class="form-group">
                                <input type="password" class="form-control" name="old_pwd" placeholder="Old Password"
                                       required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <?php if(isset($_GET['E3'])){
                                    echo "<span class='error'>". $_GET['E3']."</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="new_pwd" placeholder="New Password"
                                       required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain one number and one uppercase and lowercase letter, and atleast 8 or more characters"
                                       data-toggle="tooltip">
                                <?php if(isset($_GET['E1'])){
                                    echo "<span class='error'>". $_GET['E1']."</span>";
                                }  ?>  
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm_pwd" placeholder="Confirm Password"
                                       required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                <?php if(isset($_GET['E2'])){
                                    echo "<span class='error'>". $_GET['E2']."</span>";
                                } 
                                if(isset($_GET['success'])){
                                    echo "<h5 class='success'>". $_GET['success']. "</h5>";
                                }
                                ?>   
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>
