
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--modal header-->
            <div class="modal-header">
                <h3 class="modal-title">Login
                <button type="button" class="close" data-dismiss='modal'>&times;</button></h3>
            </div>
            <!--Modal header-->
            <div class="modal-body">
                <p>Don't have an account? <a href="signup.php">Register Here</a></p>
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required pattern="[a-z0-9.%_+-]+@[a-z0-9_.]+\.[a-z]{2,3}"
                               title="emailid@xyz.com" data-toggle="tooltip">
                        
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                               title="Must contain one uppercase and lowercase letter with one digit and atleast 8 or more characters" data-toggle="tooltip">
                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
                <div class="modal-footer">
                    <a href="forgot.php">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>