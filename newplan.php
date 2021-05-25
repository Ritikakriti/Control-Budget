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
    <title>New Plan | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top:100px; 
            padding-bottom:100px;
            overflow-y:auto;
        }
        .btn:hover{
            color:white;
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
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-4 align-self-center">
                <div class="card">
                    <h4 class="card-header text-white bg-info con">Create New Plan</h4>
                    <div class="card-body">
                        <form class="form-groups" method="POST" action="plandetails.php">
                            <div class="form-row">
                                <p><strong>Initial Budget:</strong></p><br>
                                <input type="number" name="budget" id="budget" placeholder="Initial Budget (ex.400)" class="form-control" min="50" required><br>
                            </div>
                            <div class="form-row">
                                <p><strong>How many people you want to add in this budget plan:</strong></p><br>
                                <input type="number" name="people" id="people" placeholder="No. of People" class="form-control" min="1" required><br><br>
                            </div>
                            <div class="form-row">
                                <input role="button" class="btn  btn-block btn-info plane" type="submit"  Value="Next">
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