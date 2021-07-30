<?php
  require 'includes/common.php';
  if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = mysqli_real_escape_string($con,$_GET['email']);
    $token = mysqli_real_escape_string($con,$_GET['token']);
    
    $select = "SELECT id FROM users WHERE email='$email' and token='$token' and token<>'' and token_expire > NOW()";
    $result= mysqli_query($con, $select) or die(mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        $new_pwd = "sdjjsdhuebebhxxncoir32554873etwg";
        $new_pwd = str_shuffle($new_pwd);
        $new_pwd = substr($new_pwd, 0, 10);
        $new_pwd = md5(md5($new_pwd));
        $update_query= "UPDATE users SET password='$new_pwd' and token='' WHERE email='$email'";
        mysqli_query($con, $update_query)or die(mysqli_error($con));
        echo 'Your new password is: '.$new_pwd;
        echo '<br><a href="login.php">click here</a> to visit login page';
    }else{
        header('location:login.php');
        exit();
    }
}
 else {
    header('location:login.php');
    exit();
}
?>
