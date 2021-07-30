<div class="navbar navbar-inverse navbar-fixed-top header_deco">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand" style="color: #fff;">Home</a>
        </div>
        <div class="collapse navbar-collapse links" id="mynav">
            <ul class="nav navbar-nav navbar-right ">
            <?php if(isset($_SESSION['id'])){ ?>
                <li><a href="cart.php" style="color: #fff;"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
            <li><a href="setting.php" style="color: #fff;"><span class="glyphicon glyphicon-user">Setting</span></a></li>
            <li><a href="logout.php" style="color: #fff;"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
            
            <?php }
                else { ?>
            
            <li><a href="signup.php" style="color: #fff;"><span class="glyphicon glyphicon-user">SignUp</span></a></li>        
            <li><a href="#mymodal" data-toggle='modal' style="color: #fff;"><span class="glyphicon glyphicon-log-in">Login</span></a></li> 
            <li><a href="aboutus.php" style="color: #fff;"><span class="glyphicon glyphicon-tasks">AboutUs</span></a></li>
            <li><a href="contactus.php" style="color: #fff;"><span class="glyphicon glyphicon-phone">ContactUs</span></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
