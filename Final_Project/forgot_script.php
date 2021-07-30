<?php
require 'includes/common.php';
use PHPMailer\PHPMailer\PHPMailer;
if(!isset($_POST['email'])){
    header('location:forgot.php?E1=Enter your Email id First!');
}
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $query= $con->prepare("SELECT email, password AS pwd FROM users WHERE email=?");
  $query->bind_param("s",$email);
  $query->execute();
  $query_result= $query->get_result();
  if (mysqli_num_rows($query_result)> 0) {
   $token = "sdjjsdhuebebhxxncoir32554873etwg";
   $token = str_shuffle($token);
   $token = substr($token, 0, 10);
   
//   Dear Sir/Mam I have written the code for sending Email to the user But I have not hosted my Web site on Internet
//   So, I am Not 100% sure that it will work or not Thank you sir/Mam
   $update_query= $con->prepare("UPDATE users SET token=?,token_expire=date_add(NOW(),INTERVAL 5 MINUTE) WHERE email=? ");
   $update_query->bind_param("ss",$token,$email);
   $update_query->execute();
   
   require_once 'phpmailer/PHPMailer.php';
   require_once 'phpmailer/Exception.php';
   
   $mail= new PHPMailer();
   $mail->addAddress($email);
   $mail->setFrom("shubhgupt932@gmail.com", "Electronic Gadgets");
   $mail->Subject= "Reset Password";
   $mail->isHTML(TRUE);
   $mail->Body= "Hi,<br><br>In Order to reset your password,Please click on the link below:<br>"
           . "<a href='http://localhost/Final_Project/reset_password.php?email=$email&token=$token'>"
           . "http://localhost/Final_Project/reset_password.php?email=$email&token=$token</a><br><br>Thank You";
  if($mail->send()){ 
   header('location:forgot.php?success=Please Check Your Email Inbox!');
}
 else {
    header('location:forgot.php?E2=Something went wrong! Please try again');
}
}
else{
    header('location:forgot.php?E3=Email does not exist!');
}
?>

