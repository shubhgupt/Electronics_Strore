<?php
require 'includes/common.php';

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con, $name);
    
    $email_id = $_POST['email'];
    $email_id = mysqli_real_escape_string($con , $email_id);
    
    $pwd= $_POST['password'];
    $pwd= mysqli_real_escape_string($con,$pwd);
    
    $contact = $_POST['contact'];
    $contact= mysqli_real_escape_string($con,$contact);
    
    $city= $_POST['city'];
    
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con, $address);
    
    $coupon = $_POST['coupon'];
    $coupon = mysqli_real_escape_string($con,$coupon);
    if(strcmp($coupon, "WLCM10")){
        $coupon= NULL ;
    }
    $regex_email= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    $regex_contact= "/^[6789][0-9]{9}$/";
    if (!preg_match($regex_email, $email_id)) {
        header('location: signup.php?E1=Invalid Email!');
    }
    $select_query = $con->prepare("SELECT * FROM users WHERE email = ?");
    $select_query->bind_param("s",$email_id);
    $select_query->execute();
    $select_query_result= $select_query->get_result();
    if (mysqli_num_rows($select_query_result) > 0) {
        header('location: signup.php?E2= Email Already Exist! ');
    }
    elseif(strlen($pwd)< 8){
        header('location: signup.php?pwd_error= Must contain atleast 8 characters!');
    }
    elseif(!preg_match($regex_contact, $contact)){
        header('location: signup.php?contact_error= Contact should contain 10 digits and a valid contact number!');
    }
    elseif(!strcmp($city, "Select City")){
        header('location: signup.php?city_error=Please select City!');
    }
    else {
        $pwd= md5(md5($pwd));
        $insert_query= $con->prepare("INSERT INTO users(name,email,password,contact,city ,address,coupon,token,token_expire) VALUES(?,?,?,?,?,?,?,'',NULL)");
        $insert_query->bind_param("sssisss",$name,$email_id,$pwd,$contact,$city,$address,$coupon);
        
        $insert_query->execute();
        
        $_SESSION['id']= mysqli_insert_id($con);
        $_SESSION['email'] = $email_id;
        header('location: home.php');
        
   }
?>
