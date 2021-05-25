
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
    <title>Login | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            padding-top: 100px;
            padding-bottom:100px;
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
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-4  align-self-center">
            <div class="card">
                <h4 class="card-header text-black con">Login</h4>
                <div class="card-body">
                    <form class="form-groups" method="POST" action="logdata.php ">
                        <div class="form-row">
                            <p><strong>Email:</strong></p><br>
                            <input type="email" id="email" placeholder="Email" class="form-control" name="email" required><br><br>
                        </div>
                        <div class="form-groups">
                            <p><strong>Password:</strong></p>
                            <input type="password" id="password" placeholder="Password" name="password" pattern=".{6,}"class="form-control" required><br>
                        </div>
                        <div class="form-row">
                            <input role="button" class="btn btn-info btn-block" type="submit" value="Login">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Don't have an account? <a href=".\Signup.php">Create or Sign Up</a></p>
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