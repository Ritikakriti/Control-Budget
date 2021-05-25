
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
    <title>Sign Up | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top: 70px;
            padding-bottom:60px;
            overflow-y:auto;
        }
    </style>
</head>
<body>
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
    <div class="container ">
        <div class="row justify-content-center align-items-center row-content">
            <div class="col-sm-4 align-self-center">
                
            <div class="card ">
                <h4 class="card-header text-black con">Sign Up</h4>
                <div class="card-body">
                    <form class="form-groups" method="POST" action="Signupdata.php " name="f1" >
                        <div class="form-row">
                            <p><strong>Name:</strong></p><br>
                            <input type="text" id="name" placeholder="Name" name="name" class="form-control" required><br>
                        </div>
                        <div class="form-row">
                            <p><strong>Email:</strong></p><br>
                            <input type="email" id="email" placeholder="Enter Valid Email" name="email" class="form-control" required><br>
                        </div>
                        <div class="form-row">
                            <p><strong>Password:</strong></p><br>
                            <input type="password" id="password" placeholder="Password (min. 6 characters)" name="password" class="form-control" pattern=".{6,}" required><br>
                        </div>
                        <div class="form-row">
                            <p><strong>Phone Number:</strong></p><br>
                            <input type="text" id="phone" placeholder="Valid Phone Number (ex.8976543265) " name="phone" class="form-control" pattern="[1-9][0-9]{9}" required><br><br>
                        </div>
                        <div class="form-row">
                            <input role="button" name="signup_user" class="btn btn-info btn-block" type="submit" value="Sign Up">
                        </div>
                        
                    </form>
                </div>
            </div>
            <br><br>
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