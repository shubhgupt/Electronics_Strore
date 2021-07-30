<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/links.php'; ?>
        <title>Contact | Electronic Gadgets</title>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <style>
            p{
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <?php 
        include 'includes/header.php';
        include 'login_modal.php';
        ?>
        <div class="container content">
            <div class="row" class="padding">
                <div class=" col-md-8 col-sm-6">
                    <h2 style="color:  #a073b8;">LIVE SUPPORT</h2>
                    <h4 style="color:  #e27a2c;">24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p class="justify">We have 24x7 Live support for our consumers. If you have any query 
                    related to any product or any service you can directly ask about it. We assure you
                    that you will get the answer from our Technical Experts within 24 hours.Please 
                    be sure that you should not use any abusing language or signs which can hurt someone's 
                    feelings, if it haapens then some serious actions can be taken.</p>
                    <h3>Contact Us</h3>
                    <form action="contact_script.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" name="email" required=""
                                   pattern="[a-z0-9.%_+-]+@[a-z0-9_.]+\.[a-z]{2,3}" title="emailid@xyz.com">
                            <?php if(isset($_GET['error'])){
                                 echo '<span class="error">'.$_GET['error'].'</span>';
                            }?>
                        </div>
                        <div class="form-group">
                            <label for="name">Message:</label>
                            <textarea  id="name" class="form-control" name="message" rows="10" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
                            <?php if(isset($_GET['success'])){
                                echo '<h4 class="success">'.$_GET['success'].' Your query or suggestion has been registered Successfully, our Experts will reply you within 24 Hours!</h4>';
                            }?>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <img src='img/contact.png' class="img-responsive">
                    <h3>Company Information</h3>
                    500 Lorem Ipsum Dolor Sit<br>
                    22-56-2-9 Sit Amet, Lorem,<br>
                    USA<br>
                    Phone:(00) 222 666 444<br>
                    Fax:(000) 000 00 00<br>
                    Email: electronic_gadget@gmail.com<br>
                    Follow Us:<a href="#" class="btn btn-primary">Facebook</a>
                    <a href="#" class="btn btn-danger">Instagram</a>
                    <br><br>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>