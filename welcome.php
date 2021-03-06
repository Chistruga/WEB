<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>BookLand</title>
</head>
<body>
        <div class="container">
    <div class="row">
            <div class="col-md-4">
                        <a href="index.html"><img src="img/logo1.png" class="img-responsive center-block h-auto w-75" style="padding-top:1em;">
                        </a>
                        </div>
            <div class="col-md-4" style="padding-top:75px;">
                        <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="form-control input-lg" placeholder="search" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-lg" type="button">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
            </div>
            <div class="col-md-4" style="text-align:center;">
                    <div class="row" style="padding-left:25px;">
            <h5 style="padding-left: 40px; margin-top:50px;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h5>
			<p><a href="logout.php" class="btn btn-secondary" style="margin-left: 170px">Sign Out</a></p>
                                <a href="login.php"><img src="img/acount.png" class="d-inline img-responsive center-block imagine" style="padding-top: 20px"></a>
                                <a href="index.html"><img src="img/buy.png" class="d-inline img-responsive center-block imagine" style="padding-top: 20px"></a>
                                <a href="index.html"><img src="img/lang.png" class="d-inline img-responsive center-block imagine" style="padding-top: 20px"></a>
                         
                    </div>
                    
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <nav class="text-nowrap bg-light" style="text-align:center;">
                    <a href="welcome.php" class="text-secondary pr-md-3">HOME</a>
                    <a href="login.php" class="text-secondary pr-md-3">ABOUT</a>
                    <a href="product.php" class="text-secondary pr-md-3">BOOKS</a>
                    <a href="#" class="text-secondary pr-md-3">HELP</a>
            </nav>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-12" style="padding-top:50px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
                          </div>
                    
                          <div class="item">
                            <img src="img/2.jpg" alt="Chicago" style="width:100%;">
                          </div>
                        
                          <div class="item">
                            <img src="img/3.jpg" alt="New york" style="width:100%;">
                          </div>

                          <div class="item">
                                <img src="img/4.jpg" alt="New york" style="width:100%;">
                              </div>
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
        </div>
    </div>
    <hr style=" border: 3px solid rgb(50, 93, 129)">
    <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; text-align: center; color:red; font-weight:bold;"><img src="img/bs2018.jpg" alt="..." ></h3>
    <hr style=" border: 3px solid rgb(50, 93, 129)">
    <div class="row">
            <div class="col-md-12" style="padding-top:3px;">
        <div class="col-md-4">
                <img src="img/book1.jpg" alt="..." class=" border border-secondary rounded">
        </div>
        <div class="col-md-4">
                <img src="img/book2.jpg" alt="..." class=" border border-secondary rounded">
        </div>
        <div class="col-md-4">
                <img src="img/book3.jpg" alt="..." class=" border border-secondary rounded">
        </div>
            </div>
    </div>
    <hr style=" border: 3px solid rgb(50, 93, 129)">
    <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; text-align: center; color:red; font-weight:bold;"><a href="https://www.w3schools.com/html/"><img src="img/NEW.jpg" alt="..."  style="WIDTH:12%;"></h3>
    <hr style=" border: 3px solid rgb(50, 93, 129)">
    <div class="row" style="padding-bottom:40px;">
        <div class="col-md-12">
                <div class="col-md-3">
                        <img src="img/n1.jpg" class=" border border-secondary rounded w-75">
                </div>
                <div class="col-md-3">
                        <img src="img/n2.jpg" class=" border border-secondary rounded w-75">
                </div>
                <div class="col-md-3">
                        <img src="img/n3.jpg" class=" border border-secondary rounded w-75">
                </div>
                <div class="col-md-3">
                        <img src="img/n4.jpg" class=" border border-secondary rounded w-75">
                </div>
        </div>
    </div>
	
   	
    <div class="row ffo bg-light">
            <div class="col-md-12">
        <!--https://www.rosegal.com/promotion/black-friday-sale.html?lkid=409449&gclid=EAIaIQobChMIq_PPjJDk3gIVFYuyCh2oxgtqEAAYASAAEgKpfvD_BwE-->
            <div class="col-md-4">
                   <h6><b>Our Info</b></h6>
                   <a href="https://www.amazon.in/gp/help/customer/display.html/ref=footer_privacy?ie=UTF8&nodeId=200534380">Privacy Policy</a><br>
                   <a href="https://www.amazon.in/gp/help/customer/display.html/ref=footer_cou?ie=UTF8&nodeId=200545940">Terms and Conditions</a><br>
                   <a href="url">Report Security Issues</a><br>
            </div>
            <div class="col-md-4">
                    <h6><b>Customer Service</b></h6><br>
                    <a href="https://support.google.com/store/answer/6160267?hl=en">Payment Methods</a><br>
                    <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=201845220">Warranty and Returns</a><br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align:center;">Copyright © 2011-2018 BookLand.com.<br> All Rights Reserved.</b>
            </div>
            <div class="col-md-4">
                    <h6><b>Follow us</b></h6>
                    <a href="https://www.facebook.com/">
                    <img src="img/facebook.png" class="d-inline img-responsive center-block imagine1" style="padding-right:15px;">
                    </a>
                    <a href="https://twitter.com/">
                    <img src="img/twitter.png" class="d-inline img-responsive center-block imagine1" style="padding-right:15px;">
                    </a>
                    <a href="https://www.instagram.com/">
                    <img src="img/instagram.png" class="d-inline img-responsive center-block imagine1" style="padding-right:15px;"> 
                    </a>
                </div>
        </div>
       
            </div>
            
            </div>
    </body>
    </html>