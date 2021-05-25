<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css"> 
    <title>About Us | Control Budget</title>
    <style>
        body {
            background-color:#cae9fb;
            background-attachment: fixed;
            background-size: 100% 100%;
            padding-top: 100px;
            padding-bottom:100px;
            overflow-y:auto;
        }
        
    </style>
</head>
<body>
    <?php if(isset($_SESSION['email'])){ ?>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
           
            <a class="navbar-brand mr-auto" href=".\homepage.php">Ct₹l Budget</a>
            <button class="navbar-toggler ml-auto" type="button" data-target="#Navbar" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a class="nav-link" href=".\aboutus.php"><span class="fa fa-info-circle fa-lg"></span> About Us</a></li>
                <li class="nav-item"><a class="nav-link" href=".\changepassword.php"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
                <li class="nav-item"><a class="nav-link" href=".\logout.php"><span class="fa fa-sign-out fa-lg"></span> Logout</a></li>
            </ul> 
           </div>
                           
        </div>
    </nav>
    <?php } else{ ?>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            
            <a class="navbar-brand mr-auto" href=".\index.html">Ct₹l Budget</a>
            <button class="navbar-toggler ml-auto" type="button" data-target="#Navbar" data-toggle="collapse">
                <span class="navbar-toggler-icon "></span>
            </button> 
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a class="nav-link" href=".\aboutus.php"><span class="fa fa-info-circle fa-lg"></span> About Us</a></li>
                <li class="nav-item"><a class="nav-link" href=".\signup.php"><i class="fa fa-user-circle fa-lg"></i> Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href=".\login.php"><span class="fa fa-sign-in fa-lg"></span> Login</a></li>
            </ul> 
           </div>
                           
        </div>
    </nav>
    <?php } ?>
    <div class="container">
        <div class="row align-self-center">
            <div class="col-sm-6">
                <div class="media" style="padding-bottom:5px">
                    <img src="user.png" width="70" height="70" class="d-flex img-thubnail mr-2">
                    <div class="media-body align-self-center"><h3>Who are we?</h3></div>
                </div>
                <h6>We are a group of young technocrats who came up with an idea of solving budgets and line issues which we usually
                    face in our daily lifes. We are here to provide a budget controller according to your aspects.<br><br>
                    Budget control is a biggest financial issue in the present world.We should look after their budget control
                    to get rid of from their financial crisis.
                </h6>
                <br>
            </div>
            <div class="col-sm-6">
                <div class="media" style="padding-bottom:5px">
                    <img src="question.png" width="70" height="70" class="d-flex img-thubnail mr-2">
                    <div class="media-body align-self-center"><h3>Why choose us?</h3></div>
                </div>
                <h6>We provide with a predominent way to control and manage your budget estimations with ease of accessing
                    for multiple users.
                </h6>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <img src="contact.png" width="70" height="70" class="d-flex img-thubnail mr-2">
                    <div class="media-body align-self-center"><h3>Contact Us</h3></div>
                </div>
                <h6><strong>Email: </strong>ctrlbudget@gmail.com </h6>
                <h6><strong>Mobile: </strong>+91-8448444853 </h6>  
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        
        <p>Copyright © Control Budget. All Rights Reserved|Contact Us: +91-8448444853.</p>
    </footer>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>