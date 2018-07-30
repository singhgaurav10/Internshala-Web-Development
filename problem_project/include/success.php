<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {   
        header('location: ../index.php'); 
    }
    $user_id = $_SESSION['id'];
    $user_update_query = "UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id'";
    $user_update_submit = mysqli_query($con, $user_update_query) or die(mysqli_error($con));
    header('location: ../success.php');
?>