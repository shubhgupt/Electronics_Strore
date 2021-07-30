<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ul type="none">
                    <h4>Information</h4>
                    <li><a href="aboutus.php" class="footer_links">AboutUs</a></li>
                    <li><a href="contactus.php" class="footer_links">ContactUs</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul type="none">
                    <h4>My Account</h4>
                    <?php if(!isset($_SESSION['id'])) { ?>
                    <li><a href="#mymodal" data-toggle="modal" class="footer_links"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
                    <li><a href="signup.php" class="footer_links"><span class="glyphicon glyphicon-user">Signup</span></a></li>
                    <?php } 
                    else {
                    ?>
                    <li><a href="setting.php" class="footer_links"><span class="glyphicon glyphicon-user">Setting</span></a></li>
                    <li><a href="cart.php" class="footer_links"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                    <li><a href="logout.php" class="footer_links"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul type="none">
                    <h4>Contact Us</h4>
                    <li>Contact: +91 9109071454</li>
                    <li>Email: shubhgupt932@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</footer>