<?php session_start() ;$count=1;
    $con=mysqli_connect("localhost:3308","root","","budget") ;
    $email=$_SESSION['email'];
    $stitle=$_SESSION['title'];
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
    <title>Expense | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top:85px; 
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
            <div class="row justify-content-center ">
                <div class="col-sm-7 col-12">
                <div class="card col-12">
                    <div class="card-header text-white bg-info con row">
                            <div class="col-8" style="text-align:left">
                            <h4><?php echo $_SESSION['title'];?></h4>
                            </div>
                            <div class="col-4"style="text-align:right">
                            <h4><span class="fa fa-user"> &nbsp;</span><?php  echo $_SESSION['people'];?></h4>
                            </div>
                    </div>
                        <div class="card-body">
                        <form class="form-groups" >
                            <div class="form-row">
                               <div class="col-8">
                                   <p><strong>Initial Budget:</strong></p>
                               </div>
                               <div class="col-4" style="text-align:right">
                                   <?php echo"₹". $_SESSION['budget']?>
                               </div>
                            </div>
                            <?php 
                                $query="SELECT * FROM person where Email='$email' and Title='$stitle'";
                                $result=mysqli_query($con,$query);
                            ?>
                            <?php while($rows=mysqli_fetch_assoc($result)) {?>
                            <div class="form-row">
                                <div class="col-8">
                                    <strong><?php echo$rows['People'] ;?></strong>
                                </div>
                                <div class="col-4" style="text-align:right">
                                    <?php 
                                        $person=$rows['People'] ;
                                        $query1="SELECT SUM(Amount) FROM expense where email='$email' and Stitle='$stitle' and People='$person'";
                                        $result1=mysqli_query($con,$query1);
                                        $row=mysqli_fetch_assoc($result1);
                                        echo"₹". $row['SUM(Amount)'];
                                    ?>
                                </div>
                            </div>
                            <br>
                            <?php  } ?>
                            <div class="form-row">
                               <div class="col-8">
                                   <p><strong>Total Amount Spent:</strong></p>
                               </div>
                               <div class="col-4" style="text-align:right">
                                   <?php echo"₹". $_SESSION['amount']?>
                               </div>
                            </div>
                            <div class="form-row">
                               <div class="col-8">
                                   <p><strong>Remaining Amount:</strong></p>
                               </div>
                               <?php if($_SESSION['remain']>0) {?>
                                <div class="col-4 "style="text-align:right;color:green">
                                     ₹<?php echo $_SESSION['remain'] ?>
                                </div>
                                <?php }?>
                                <?php if($_SESSION['remain']<0) {?>
                                <div class="col-4 " style="text-align:right;color:red">
                                    Overspent by ₹<?php echo (-$_SESSION['remain']) ?>
                                </div>
                                <?php }?>
                                <?php if($_SESSION['remain']==0) {?>
                                <div class="col-4 " style="text-align:right;color:black">
                                ₹<?php echo ($_SESSION['remain']) ?>
                                </div>
                                <?php }?>
        
                            </div>
                            <div class="form-row">
                               <div class="col-8">
                                   <p><strong>Individual Shares:</strong></p>
                               </div>
                               <div class="col-4" style="text-align:right">
                                   <?php echo"₹". $_SESSION['amount']/$_SESSION['people']?>
                               </div>
                            </div>
                            <?php $count=1?>
                            <?php 
                                        $query="SELECT People FROM person where Email='$email' and Title='$stitle'";
                                        $result=mysqli_query($con,$query);
                                    ?>
                            <?php while($rows=mysqli_fetch_assoc($result)) {?>
                            <div class="form-row">
                    
                                <div class="col-8 mr-auto">
                                    <strong><?php echo$rows['People']; $person=$rows['People']?></strong>
                                </div>
                                    <?php 
                                        $query1="SELECT SUM(Amount) FROM expense where email='$email' and Stitle='$stitle' and People='$person'";
                                        $result1=mysqli_query($con,$query1);
                                        $row=mysqli_fetch_assoc($result1);
                                        $money=$row['SUM(Amount)']-($_SESSION['amount']/$_SESSION['people']);
                                    ?>
                                <?php if($money>0) {?>
                                <div class="col-4 "style="text-align:right;color:green">
                                    Gets Back ₹<?php echo $money ?>
                                </div>
                                <?php }?>
                                <?php if($money<0) {?>
                                <div class="col-4 " style="text-align:right;color:red">
                                    Owes ₹<?php echo (-$money) ?>
                                </div>
                                <?php }?>
                                <?php if($money==0) {?>
                                <div class="col-4 " style="text-align:right;color:black">
                                    All Settled Up
                                </div>
                                <?php }?>
                            </div>
                            <br>
                            <?php $count=$count+1; } ?>
                            <div class="form-row justify-content-center"> 
                                <a role="button" class="btn  btn-info plane " type="submit" href="viewplan.php"><span class="fa fa-arrow-left"></span>Go Back</a>
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