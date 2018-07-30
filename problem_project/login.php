<?php
    require 'include/common.php';
    if (isset($_SESSION['email'])) {   
        header('location: home.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
        
        <div class="container adjust">
            <div class="row">
                <div class="col-xs-7">
                    <img src="img/signup.jpg" alt="signup image" height="360px" width="640px">
                </div>    
            <div class="col-xs-5">
            <div class="panel panel-default" style="margin-top: 30px">
                <div class="panel-heading">
                    <h4>LOG IN</h4>
                </div>
                <div class="panel-body">
                    <form method="POST" action="include/login_submit.php">
                        <p>Don't have a account? <a href="signup.php">Register</a></p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}">
                            <?php if (isset($_GET['password_error']) ){  
                                echo $_GET['password_error']; } ?>
                        </div>
                        <button type="submit" value="Submit" class="btn btn-primary">Submit</button><br><br>
                        <a href="#">Forgot Password?</a>
                    </form>
                </div>
            </div>
            </div>
            </div>
        </div>
        <?php
            include 'include/footer1.php';
        ?>
    </body>
</html>