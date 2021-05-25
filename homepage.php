<?php session_start(); 
    $con=mysqli_connect("localhost:3308","root","","budget") ;
    $email=$_SESSION['email'];
    $query="SELECT * FROM plandetails where email='$email'";
    $result=mysqli_query($con,$query);
    $counter=0;
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
    <title>Homepage | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top: 85px;
            padding-bottom:100px;
            overflow-x: hidden; 
            overflow-y: auto;
        }
        .btn:hover{
            color:white;
        }
        .b{
            bottom:70px;
            right:25px;
            position:fixed;
        }
        
        .padd{
            padding: 50px 0px;
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
    <div class="container">
        <?php 
            $row=mysqli_num_rows($result);
            if($row==0){
        ?>
        <div class="row">
            <div class="col-12">
                <h5>You don't have any active plans</h5><br>
            </div>
             
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="card col-sm-3 col-8 padd">
                <div class="card-body">
                    <div class="row justify-content-center">
                    <a href=".\newplan.php"><span class="fa fa-plus-circle"></span>Create a New Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-12">
                    <h3>Your Plans</h3>
                </div>
            <?php while($rows=mysqli_fetch_assoc($result)){ ?>
                <div class="card-deck col-sm-5 col-12 offset-sm-0">
                <div class="card col-12 " style="margin-top:10px" >
                    <div class="card-header bg-info text-white row">
                        <div class=col-8>
                        <h4><?php echo $rows['Title'];  ?> </h4>
                        </div>
                        <div class=col-4 style="text-align:right">
                        <h4><span class="fa fa-user"> &nbsp </span><?php echo $rows['Person'] ?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <dt class="col-6"> Budget</dt>
                            <dd class="col-6" style="text-align:right"> <?php echo"₹". $rows['Budget'] ?>
                        </div>
                        <div class="row">
                            <dt class="col-4"> Date</dt>
                            <?php
                                $date1 = explode('-', $rows['Date1']);
                                $yr=$date1[0];
                                $mm=$date1[1];
                                $dd=$date1[2];
                                $date1=$dd."-".$mm."-".$yr; 
                                $date2= explode('-', $rows['Date2']);
                                $yr=$date2[0];
                                $mm=$date2[1];
                                $dd=$date2[2];
                                $date2=$dd."-".$mm."-".$yr;
                            ?>
                            <dd class="col-8" style="text-align:right"> <?php echo $date1." to ".$date2 ?>
                        </div>
                        <form class="form-group" method="POST" action="viewplan.php">
                        <input type="hidden" name="title" id="title" value="<?php echo $rows['Title'] ?>">
                        <input type="hidden" name="people" id="title" value="<?php echo $rows['Person'] ?>">
                        <input type="hidden" name="budget" id="title" value="<?php echo $rows['Budget'] ?>">
                        <input type="hidden" name="date1" id="title" value="<?php echo $rows['Date1'] ?>">
                        <input type="hidden" name="date2" id="title" value="<?php echo $rows['Date2'] ?>">
                        <div class="row">
                            <input type="submit" value="View Plans" class="btn btn-info btn-block plane" name="sub" >
                            <?php $counter=$counter+1 ?>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                &nbsp;&nbsp;
                <br>
            <?php } ?>
            <div>
                <a href=".\newplan.php"><h2><span class="fa fa-plus-circle fa-lg b text-info"></h2></a>
            </div>
            </div>
        <?php } ?>
    
    <footer class="footer">
        
        <p>Copyright © Control Budget. All Rights Reserved|Contact Us: +91-8448444853.</p>
    </footer>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>