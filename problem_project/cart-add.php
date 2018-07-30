<?php
    require 'include/common.php';
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $user_insert_query = "INSERT INTO users_items(user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart')";
    $user_insert_query_submit = mysqli_query($con, $user_insert_query) or die(mysqli_error($con));
    header('location: home.php');
?>