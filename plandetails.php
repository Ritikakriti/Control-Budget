<?php session_start( ) ;
if(isset($_POST['people'])) {$people=$_POST['people']; $_SESSION['people']=$people;}
if(isset($_POST['budget'])) {$budget=$_POST['budget'];  $_SESSION['budget']=$budget;}
$count=1;
$date=date("Y-m-d");
$date = explode('-', $date);
$yr=$date[0];
$mm=$date[1];
$dd=$date[2];
if($mm=="01" && $yr%4==0 && ($dd=="30" || $dd=="31"))
{
    if($dd=="30")
    {
        $dd="01";
        $mm="02";
    }
    else if($dd=="31")
    {
        $dd="02";
        $mm="02";
    }
}
else if($mm=="01" && ($dd=="30" || $dd=="31" || $dd=="29"))
{
    if($dd=="30")
    {
        $dd="02";
        $mm="02";
    }
    else if($dd=="31")
    {
        $dd="03";
        $mm="02";
    }
    else if($dd=="31")
    {
        $dd="01";
        $mm="02";
    }
}
else if($mm=="12")
{
    $mm="01";
    $yr=$yr+1;
}
else if($mm=="04" || $mm=="06" || $mm=="09" || $mm=="11")
    $mm=$mm+1;
else if($mm=="03" || $mm=="05" || $mm=="07" || $mm=="08"|| $mm="10")
{
    if($dd="31")
    {
        $dd="01";
        $mm=$mm+2;
    }
    else
        $mm=$mm+1;

}
$d=$yr."-".$mm."-".$dd;
$_SESSION['d']=$d;

?>
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
    <title>Plan Details | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            padding-top: 90px;
            overflow-y:auto;
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
                <div class="col-sm-5 align-self-center">
                    
                <div class="card">
                    <div class="card-body">
                        <form class="form-groups" method="POST" action="plandetaildata.php">
                            <div class="form-row form-group">
                                <p><strong>Title</strong></p>
                                <input type="text" name="title" class="form-control" placeholder="Add a Title (Ex. Goa Trip)"required>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-6">
                                    <p><strong>From </strong></p>
                                    <input type="date" class="sample_class" name="d1" required>
                                </div>
                                <div class="col-sm-6">
                                    <p><strong>To </strong></p> 
                                    <input type="date" class="sample_class" name="d2" required >
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-6">
                                    <p><strong>Initial Budget:</strong></p>
                                    <input type="number" name="budget" class="form-control" value="<?php  echo $_SESSION['budget'];?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <p><strong>Number of People:</strong></p>
                                    <input type="number" name="people" class="form-control"value="<?php echo $_SESSION['people']?>" readonly>
                                </div>
                            </div>
                            <?php while($count<= $_SESSION['people']) { ?>
                                <div class="form-row form-group">
                                    <p><strong> Person<?php echo $count ?></strong></p>
                                    <div class="col-12">
                                    <input type="text" name="person<?php echo$count ?>" placeholder="Person<?php echo$count ?> Name" class="form-control" required>
                                    </div>
                                </div>
                            <?php $count=$count+1; } ?>
                            <div class="form-row">
                                <input role="button" class="btn  btn-block btn-info plane" type="submit" Value="Submit">
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