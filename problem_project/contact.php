<?php
    require 'include/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        <style>
            .adjust{
                margin-top: 80px;
                margin-bottom: 80px;
            }
            .adjust2{
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        
        <div class="container adjust">
            <div class="row text-justify adjust2">
                <div class="col-md-9 col-sm-12">
                    <h3><b>Live Support</b></h3>
                    <h5>25 hours | 7 days a week | 365 days a year Live technical support</h5>
                    <p>When you think of great website design, you probably think about a website's homepage, or 
                        their blog, or their product pages.But what about a website's 'Contact Us' page? Far too 
                        many website designers put contact pages near the bottom of their priority list in 
                        terms of copywriting and design. Think about how many contact pages you've stumbled 
                        upon that look like they were built in the 1990s, even if the rest of the website is 
                        beautiful and updated.</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <img src="img/contact_us.jpg" alt="Contact us image" height="200px" width="200px">
                </div>
            </div>
            <div class="row text-justify">
                <div class="col-md-8 col-sm-12">
                    <h3><b>Contact Us</b></h3>
                    <form>
                        <b>Name:</b>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name">
                        </div>
                        <b>Email:</b>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <b>Message:</b><br>
                        <textarea class="form-control" rows="8"></textarea><br>
                        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3><b>Company Information</b></h3>
                    <p>500 Loren Ipsum Dolor St</p>
                    <p>22-56-2-9 St Annet, Loren,</p>
                    <p>USA</p>
                    <p>Phone:(00)222 666 444</p>
                    <p>Fax:(000)000 000 000</p>
                    <p>Email: info@mycompany.com</p>
                    <p>Follow us on: Facebook, Twitter</p>
                </div>
            </div>
        </div>
        
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>