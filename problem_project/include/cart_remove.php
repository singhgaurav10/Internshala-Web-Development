<?php
    require 'common.php';
    if(isset($_GET['id'])){
        $item_id = $_GET['id'];
    }
    $user_id = $_SESSION['id'];
    $user_delete_query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id'";
    $user_delete_query_submit = mysqli_query($con, $user_delete_query) or die(mysqli_error($con));
    header('location: ../cart.php');
?>