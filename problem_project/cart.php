<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) {   
        header('location: index.php'); 
    }
    $user_id = $_SESSION['id'];
    $select_query = "SELECT id, name, price FROM items WHERE id IN (SELECT item_id FROM users_items WHERE user_id = '$user_id' AND status = 'Added to cart')";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $cost = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        <style>
            .adjust{
                margin-top: 80px;
                margin-bottom: 80px;
            }
        </style>
    </head>
    
    <body>
        
        <?php
            include 'include/header.php';
        ?>
        
        <div class="container">
            <div class="row adjust">
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-bordered">
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <?php while($row = mysqli_fetch_array($select_query_result)){ 
                            $cost = $cost + $row['price'];   ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo 'Rs '.$row['price']; ?></td>
                            <td><?php echo "<a href='include/cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>" ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs <?php echo $cost; ?></td>
                            <td><a href="include/success.php" class="btn btn-primary btn-block">Confirm Order</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <?php
            include 'include/footer1.php';
        ?>
        
    </body>
</html>
