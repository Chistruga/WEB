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
<div class="col-md-3">
    <div class="vertical-menu bg-light">
      <h1  class="font font-weight-normal">CATEGORY</h1>
      <a class="size" href="product.php">Literature and Fiction</a>
      <a class="size" href="travel1.php">Travel</a>
      <a class="size" href="history1.php">History</a>
      <a class="size" href="poetry1.php">Poetry and Drama</a>
      <a class="size" href="diet1.php">Health, Fitness and Dieting</a>
      <a class="size" href="psychology1.php">Psychology</a>
    </div>
</div>
<div class="col-md-9">
    <div class="col-md-3">
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\9789735029180-2207190.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title">Străzi vechi din Bucureștiul de azi</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Alexandru Ofrim</li>
                      <li class="st3 list-group-item">MDL 200.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\a-brief-illustrated-history-of-romanians2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title">A brief ilustrated history</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Neagu Djuvara</li>
                      <li class="st3 list-group-item">MDL 180.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
    </div>
    <div class="col-md-3">
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\balcic.-micul-paradis-al-rom_niei-mari3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title">Micul paradis al României Mari</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Lucian Boia</li>
                      <li class="st3 list-group-item">MDL 200.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\blocati_in_labirint.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title"><br>Bocați în Labirint</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Agries Gedda</li>
                      <li class="st3 list-group-item">MDL 100.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
    </div>
    <div class="col-md-3">
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\epoca-de-aur-a-incertitudinii_1_fullsize.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title"><br>Epoca de aur a incertitudinii</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Adrian Cioroianu</li>
                      <li class="st3 list-group-item">MDL 210.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\istorie-recenta-100-robert-turcescu-in-dialog-cu-valeriu-stoica_1_fullsize.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title"><br>Istorie Recentă <br><br></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Robert Turcescu</li>
                      <li class="st3 list-group-item">MDL 180.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
    </div>
    <div class="col-md-3">
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\provisional-romania_1_fullsize.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title"><br>Provisional România<br></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Radu</li>
                      <li class="st3 list-group-item">MDL 150.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img\history\statele-unite-mare-putere-europeana_1_produs.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="st1 card-title">Statele Unite mare putere europeană</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="st2 list-group-item">Catherin Durandin</li>
                      <li class="st3 list-group-item">MDL 190.00</li>
                      <li class="st3 list-group-item"> <a href="#" class="st4 card-link">ADD</a></li>
                    </ul>
            </div>
            <br>
    </div>

</div>
</div>

    <div class="row ffo bg-light">
        <div class="col-md-12">
    <!--https://www.rosegal.com/promotion/black-friday-sale.html?lkid=409449&gclid=EAIaIQobChMIq_PPjJDk3gIVFYuyCh2oxgtqEAAYASAAEgKpfvD_BwE-->
        <div class="col-md-4">
               <h6><b>Our Info</b></h6>
               <a href="url">Privacy Policy</a><br>
               <a href="url">Terms and Conditions</a><br>
               <a href="url">Report Security Issues</a><br>
        </div>
        <div class="col-md-4">
                <h6><b>Customer Service</b></h6><br>
                <a href="url">Payment Methods</a><br>
                <a href="url">Warranty and Returns</a><br>
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