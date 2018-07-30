<?php
    require 'include/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
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
        <?php
            include 'include/check_if_added.php';
        ?>
        <div class="container adjust">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Samsung J2</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img1.jpg" alt="samsung mobile" height="240px" width="320px">
                            <p>4.5 inch scree,1.5 GB RAM, 8 GB internam memory, Samsung Phone </p>
                            <?php if (check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Honor 5x</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img2.jpeg" alt="LeEco mobile" height="240px" width="320px">
                            <p>5 inch scree,2 GB RAM, 16 GB internam memory, Honor phone </p>
                            <?php if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Yu Yureka</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img3.jpeg" alt="Yu Yureka mobile" height="240px" width="320px">
                            <p>5.5 inch scree,2 GB RAM, 16 GB internam memory, Yu Yureka Phone </p>
                            <?php if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Lumia 520</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img4.jpg" alt="Microsoft mobile" height="240px" width="320px">
                            <p>5 inch scree,1.5 GB RAM, 8 GB internam memory, Microsoft Phone </p>
                            <?php if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>One Plus X</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img5.jpg" alt="OnePlus mobile" height="240px" width="320px">
                            <p>4.5 inch scree,1.5 GB RAM, 8 GB internam memory, OnePlus Phone </p>
                            <?php if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Google Nexus</h4>
                        </div>
                        <div class="panel-body">
                            <img src="img/img6.jpg" alt="Motorola mobile" height="240px" width="320px">
                            <p>5.5 inch scree,2 GB RAM, 16 GB internam memory, Motorola Phone </p>
                            <?php if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                                    
                                    } else {                                     
                                        ?>                                    
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                <?php      }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
