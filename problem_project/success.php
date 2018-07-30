<!DOCTYPE html>
<html>
    <head>
        <title>Success Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        <style>
            .adjust{
                margin-top: 80px;
                margin-bottom: 80px;
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'include/header.php';
        ?>
        <div class="container adjust">
            <div class="row text-center">
                <div class="col-xs-6 col-xs-offset-3">
                    <p class="adjust">Thank You for ordering from E-Store. The order shall be delivered to you shortly</p>
                    <p class="adjust">Order some more electronics items <a href="home.php">here</a></p>
                </div>
            </div>
        </div>
        <?php
            include 'include/footer1.php';
        ?>
    </body>
</html>