<?php
    require 'include/common.php';
    if (isset($_SESSION['email'])) {   
        header('location: home.php'); 
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        <style>
            .adjust{
                margin-top: 80px;
                margin-bottom: 80px;
            }
            a:hover{
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
        <?php
        include 'include/header.php';
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
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
