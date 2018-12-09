<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
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
                        
                                            <a href="login.php"><img src="img/acount.png" class="d-inline img-responsive center-block imagine"></a>
                                            <a href="index.html"><img src="img/buy.png" class="d-inline img-responsive center-block imagine"></a>
                                            <a href="index.html"><img src="img/lang.png" class="d-inline img-responsive center-block imagine"></a>
                                     
                                </div>
                                
                        </div>
                </div>
    <div class="row">
            <div class="col-md-12">
                <nav class="text-nowrap bg-light" style="text-align:center;">
                        <a href="index.html" class="text-secondary pr-md-3">HOME</a>
                        <a href="#" class="text-secondary pr-md-3">ABOUT</a>
                        <a href="products.html" class="text-secondary pr-md-3">BOOKS</a>
                        <a href="#" class="text-secondary pr-md-3">HELP</a>
                </nav>
            </div>  
    </div>
<div class="row" style="padding:50px;">
 <div class="col-md-4">
        </div>
		 <div class="col-md-4 border">
    <div class="wrapper" style="padding-right:60px;">
        <h2 style="text-align:center;">Sign in</h2>
        <form style="text-align:center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email address</label>
                <input type="email" name="username" aria-describedby="emailHelp" class="form-control" placeholder="Enter email" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			  <a href="newPass.html"><b>Forgot your password?</b></a>
                <br>
				<br>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Login">
            </div>
			   <br>
                <br>
                <small class="form-text text-muted text-align center">New to BookLand?</small>
                  <br>
                <a href="register.php" type="submit" class="btn btn-secondary">Create your BookLand Account</a>
                <br>
                <br>
        </form>
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