<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {   
        header('location: index.php'); 
    }
    $email = $_SESSION['email'];
    $oldpassword = $_GET['oldpassword'];
    $newpassword = $_GET['newpassword'];
    $retypenewpassword = $_GET['retypenewpassword'];
    if(strlen($newpassword)== strlen($retypenewpassword)){
        $oldpassword = md5($oldpassword);
        $user_select_query = "SELECT password FROM users WHERE email='$email' AND password='$oldpassword'";
        $user_select_submit = mysqli_query($con, $user_select_query) or die(mysqli_error($con));
        if(mysqli_num_rows($user_select_submit)==0){
            header('location: ../settings.php?password=old password incorrect');
        }else{
            $newpassword = md5($newpassword);
            $user_update_query = "UPDATE users SET password='$newpassword' where email='$email'";
            $user_update_submit = mysqli_query($con, $user_update_query) or die(mysqli_error($con));
            header('location: ../home.php');
        }
    }else{
        header('location: ../settings.php?password_error=length are not equal');
    }
?>