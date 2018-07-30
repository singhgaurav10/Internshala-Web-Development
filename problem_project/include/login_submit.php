<?php
    require 'common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $user_login_query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
    $user_login_submit = mysqli_query($con, $user_login_query) or die(mysqli_error($con));
    if(mysqli_num_rows($user_login_submit)==0){
        $password_error = '';
        header('location: ../login.php?password_error=username or password is incorrect');
    }else{
        $row = mysqli_fetch_array($user_login_submit);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row['id'];
        header('location: ../home.php');
    }
?>