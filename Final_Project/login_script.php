<?php
require 'includes/common.php';
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);
    $pwd = $_POST['password'];
    $pwd = md5(md5($pwd));
    $select_query= $con->prepare("SELECT id,password FROM users WHERE email=?") ;
    $select_query->bind_param("s",$email);
    $select_query->execute();
    $result = $select_query->get_result();
    
    if(mysqli_num_rows($result)== 0){
        header('location:login.php?E2=Email does not Exist!');
    }
    else{
        $row = mysqli_fetch_array($result);
       $password = $row['password'];
       if(strcmp($pwd, $password)){
            header('location: login.php?Error=Incorrect Password!');
       }
    else {
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['email']= $email;
        header('location:home.php');
    }
    }
}
?>

