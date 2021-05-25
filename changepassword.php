<?php session_start(); ?>
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
    <title>Change Password | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top:85px; 
            padding-bottom:100px;
            overflow-y:auto;
        }
    </style>
</head>
<body>
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
        <div class="container ">
            <div class="row justify-content-center ">
                <div class=" col-sm-4 align-self-center">
                <div class="card">
                    <h4 class="card-header text-black con">Change Password</h4>
                    <div class="card-body">
                        <form class="form-groups" method="POST" action=" changepassdata.php">
                            <div class="form-row">
                                <p><strong>Old Password:</strong></p><br>
                                <input type="text" name="opass" id="opass" placeholder="Old Password" class="form-control" required><br>
                            </div>
                            <div class="form-row">
                                <p><strong>New Password</strong></p><br>
                                <input type="password" name="npass" id="npass" placeholder="New Password (min. 6 characters)" class="form-control" required><br><br>
                            </div>
                            <div class="form-row">
                                <p><strong>Confirm New Password</strong></p><br>
                                <input type="password" name="npassc" id="npassc" placeholder="Confirm New Password" class="form-control" required><br><br>
                            </div>
                            <div class="form-row">
                                <input role="button" class="btn  btn-block btn-info" type="submit"  Value="Change">
                            </div>
                        </form>
                    </div>
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
    