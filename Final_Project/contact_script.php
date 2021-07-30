<?php
require 'includes/common.php';
if(isset($_POST['email'])){
  $email= $_POST['email'];
    $email= mysqli_real_escape_string($con,$email);
    $regex_email= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    if(preg_match($regex_email, $email)){
        $name= $_POST['name'];
        $name= mysqli_real_escape_string($con,$name);
        
        $message= $_POST['message'];
        $message = mysqli_real_escape_string($con,$message);
        
        $insert = $con->prepare("INSERT INTO contact(name,email,message) VALUES(?,?,?)");
        $insert->bind_param("sss",$name,$email,$message);
        $insert->execute();
        header('location:contactus.php?success=Success!');
    } else {
        header('location:contactus.php?error=Invalid Email!');
    }
} 
?>
