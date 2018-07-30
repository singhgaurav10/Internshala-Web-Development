<?php
    function check_if_added_to_cart($item_id){
        $con = mysqli_connect("localhost", "root", "", "estore") or die(mysqli_error($con));
        $user_id = $_SESSION['id'];
        $user_select_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
        $user_query_submit = mysqli_query($con, $user_select_query) or die(mysqli_error($con));
        if(mysqli_num_rows($user_query_submit)>=1){
            return 1;
        }
        else {
            return 0;
        }
    }
?>