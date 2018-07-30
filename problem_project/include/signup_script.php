<?php
    require 'common.php';
    $name = mysqli_real_escape_string($con, $_POST['name']);
    echo "$name";
    $email = mysqli_real_escape_string($con, $_POST['email']);
    echo "$email";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    echo "$password";
    $password = md5($password);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    echo "$contact";
    $city = mysqli_real_escape_string($con, $_POST['city']);
    echo "$city";
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $user_select_query = "SELECT id FROM users WHERE email='$email'";
    $user_query_submit = mysqli_query($con, $user_select_query) or die(mysqli_error($con));
    if(mysqli_num_rows($user_query_submit)>0){
        echo 'Email already exists';
    }else{
        $user_insert_query = "INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $user_insert_query_submit = mysqli_query($con, $user_insert_query) or die(mysqli_error($con));
        $_SESSION['id'] = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        header('location: ../home.php');
    }
?>
