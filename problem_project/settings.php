<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) {   
        header('location: index.php'); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        <style>
            .adjust{
                margin-top: 80px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'include/header.php';
        ?>
        
        <div class="container adjust">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <h3>Change Password</h3>
                    <form method="GET" action="include/settings_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                        <div><?php if(isset($_GET['password'])){echo $_GET['password'];} ?></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpassword" placeholder="New Password" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="retypenewpassword" placeholder="Re-type New Password" pattern=".{6,}">
                        <div><?php if(isset($_GET['password_error'])){echo $_GET['password_error'];} ?></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'include/footer1.php';
        ?>
    </body>
</html>
