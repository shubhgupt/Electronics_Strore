<?php
require 'includes/common.php';
$user_id= $_SESSION['id'];
$old_pwd= $_POST['old_pwd'];
$new_pwd= $_POST['new_pwd'];
$confirm_pwd = $_POST['confirm_pwd'];
if(strlen($new_pwd)< 8){
    header('location: setting.php?E1=Must contain atleast 8 or more characters');
}
 elseif (strcmp($new_pwd, $confirm_pwd)) {
    header('location: setting.php?E2=Confirm password is not same as New password');
}
else {
    $old_pwd = md5(md5($old_pwd));
    $new_pwd = md5(md5($new_pwd));
    $select_pwd = $con->prepare("SELECT password FROM users WHERE id=? and password=?");
    $select_pwd->bind_param("ss",$user_id,$old_pwd);
    $select_pwd->execute();
    $select_pwd_result= $select_pwd->get_result();
    
    if( mysqli_num_rows($select_pwd_result) >=1 ){
        $update_query= $con->prepare("UPDATE users SET password=? WHERE id=? and password=?");
        $update_query->bind_param("sss",$new_pwd,$user_id,$old_pwd);
        $update_query->execute();
        header('location:setting.php?success=Password is updated Successfully!');
    }
    else{
        header('location:setting.php?E3=Invalid Password!');
    }
}
?>
