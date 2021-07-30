<!DOCTYPE html>
<html>
    <head> 
        <?php require 'includes/links.php'; ?>
        <title>Forgot Password | Electronic Gadgets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="padding-top: 70px;">
       <?php
        include 'includes/header.php';
        include 'login_modal.php';
        ?>
    
        <div class="container-fluid background_img">
            <div class="container content " style=" text-align: center;">
                <div class="row">
                    <div class="col-sm-offset-3 col-xs-offset-2 col-sm-6 col-xs-8">
                        
                        <h3 style="color:  rgb(240,173,78);" align="center">Forgot Password!</h3><br>
                         
                        <form role="form" action="forgot_script.php" method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email" name="email" class="form-control" required=""
                                       pattern="[a-z0-9.%_+-]+@[a-z0-9_.]+\.[a-z]{2,3}" title="emailid@xyz.com" data-toggle="tooltip">
                                <?php if(isset($_GET['E1'])){
                                   echo "<span class='error'>".$_GET['E1']."</span>"; 
                                } elseif (isset ($_GET['E3'])) {
                                   echo "<span class='error'>".$_GET['E3']."</span>";
                                } elseif (isset ($_GET['E2'])) {
                                   echo "<span class='error'>".$_GET['E2']."</span>";
                                } elseif (isset ($_GET['success'])) {
                                   echo "<h4 class='success'>".$_GET['success']."</h4>";
                                }
                                ?>
                            </div> 
                            <div class="form-group" align="center">
                                <button type="submit" name="submit" class="btn btn-warning">Reset Password</button>
                            </div>
                        </form>
                        
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

