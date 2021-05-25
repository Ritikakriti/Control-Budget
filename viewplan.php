<?php session_start(); $count=1;
    $con=mysqli_connect("localhost:3308","root","","budget") ;
    if(isset($_POST['budget'])){ $budget=$_POST['budget'];$_SESSION['budget']=$budget;}
    if(isset($_POST['title'])){ $title=$_POST['title'];$_SESSION['title']=$title;}
    if(isset($_POST['people'])){ $people=$_POST['people'];$_SESSION['people']=$people;}
    if(isset($_POST['date1']) && isset($_POST['date2']) ){ $date1=$_POST['date1'];$date2=$_POST['date2'];$_SESSION['date2']=$date2; $_SESSION['date1']=$date1;}
        $email=$_SESSION['email'];
        $stitle=$_SESSION['title'];
        $query="SELECT * FROM expense where email='$email' and Stitle='$stitle'";
        $result=mysqli_query($con,$query);
        $amount=0;
        while($rows=mysqli_fetch_assoc($result)){
            $amount +=$rows['Amount'];
        }
        $_SESSION['amount']=$amount;
        $_SESSION['remain']=$_SESSION['budget']-$_SESSION['amount'];
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
    <title>View Plan | Control Budget</title>
    <style>
        body{
            background-color:#d7effc;
            height: 100%;
            overflow: hidden;
            padding-top:100px; 
            padding-bottom:100px;
            overflow-y:auto;
        }
        .btn-info:hover{
            color:white;
        }
        .card-deck{
            width:30%;
        }
        .btn-default{
            color:royalblue;
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
            <div class="row">
            <div class="col-sm-8">
                <div class="row ">
                    <div class="col align-self-center">
                    <div class="card col-sm-9">
                        <div class="card-header text-white bg-info con row">
                            <div class="col-7" style="text-align:left">
                            <h4><?php echo $_SESSION['title'];?></h4>
                            </div>
                            <div class="col-5 "style="text-align:right">
                            <h4><span class="fa fa-user"> &nbsp;</span><?php  echo $_SESSION['people'];?></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-groups">
                                <div class="form-row">
                                    <div class="col-6">
                                    <p><strong>Budget</strong></p>
                                    </div>
                                    <div class="col-6 " style="text-align:right">
                                    <?php  echo"₹". $_SESSION['budget'];?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                    <p><strong>Remaining Amount</strong></p>
                                    </div>
                                    <div class="col-6" style="text-align:right">
                                    <?php if($_SESSION['remain']>0){?>
                                        <div style=color:green>
                                            <?php echo"₹".$_SESSION['remain'] ?>
                                        </div>
                                    <?php } ?>
                                    <?php if($_SESSION['remain']<0){?>
                                        <div style=color:red>
                                            Overspent by <?php echo"₹".(-$_SESSION['remain'] );?>
                                        </div>
                                    <?php } ?>
                                    <?php if($_SESSION['remain']==0){?>
                                        <div style=color:black>
                                            <?php echo"₹".$_SESSION['remain'] ?>
                                        </div>
                                    <?php } ?>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-4">
                                    <p><strong>Date</strong><p>
                                    </div>
                                    <div class="col-8"style="text-align:right">
                                    <?php
                                        $date1 = explode('-',$_SESSION['date1']);
                                        $yr=$date1[0];
                                        $mm=$date1[1];
                                        $dd=$date1[2];
                                        $date1=$dd."-".$mm."-".$yr; 
                                        $date2= explode('-', $_SESSION['date2']);
                                        $yr=$date2[0];
                                        $mm=$date2[1];
                                        $dd=$date2[2];
                                        $date2=$dd."-".$mm."-".$yr;
                                    ?>
                                    <?php  echo $date1." to ".$date2;?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <?php 
                    $email=$_SESSION['email'];
                    $stitle=$_SESSION['title'];
                    $query="SELECT * FROM expense where email='$email' and Stitle='$stitle'";
                    $result=mysqli_query($con,$query);
                ?>
                <div class="row">
                    <?php while($rows=mysqli_fetch_assoc($result)){ ?>
                        <div class="card-deck col-sm-6 col-11 ">
                            <div class="card col-12 " style="margin-top:10px" >
                                <div class="card-header bg-info text-white row justify-content-center" >
                                    <h4>
                                    <?php echo $rows['Title']  ?> 
                                    </h4>
                                </div>
                                <div class="card-body h-100">
                                    <div class="row">
                                        <dt class="col-6"> Amount</dt>
                                        <dd class="col-6" style="text-align:right"> <?php echo"₹". $rows['Amount'] ?>
                                    </div>
                                    <div class="row">
                                        <dt class="col-6"> Paid By</dt>
                                        <dd class="col-6" style="text-align:right"> <?php echo $rows['People'] ?>
                                    </div>
                                    <div class="row">
                                        <dt class="col-5"> Paid On</dt>
                                        <?php
                                            $date1 = explode('-', $rows['Date1']);
                                            $yr=$date1[0];
                                            $mm=$date1[1];
                                            $dd=$date1[2];
                                            $date1=$dd."-".$mm."-".$yr; 
                                        ?>
                                        <dd class="col-7" style="text-align:right"> <?php echo $date1?>
                                    </div>
                                    <div class="row justify-content-center">
                                    <?php if($rows['Image']==NULL) {?>
                                        <div style=color:royalblue  >
                                        <p>You don't have a bill</p>
                                        </div>
                                    <?php }?>
                                    <?php if($rows['Image']!=NULL) {?>
                                        <form method="post" action="bill.php">
                                        <input type="hidden" name="head" value="<?php echo $rows['Title']?>">
                                        <input type='submit' value="Show Bill"class="btn btn-default">
                                    </form>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="row " >
                    <div class="col-xs-9  align-self-center" style="padding:80px 0px 80px 15px">
                        <form>
                        <a type="submit" value="Expense Distribution" class="btn btn-info btn-lg plane" href=".\expensedistribution.php" >Expense Distribution</a>
                        </form>
                    </div>
                
                </div>
                <br>
                <div class="row ">
                    <div class="col-sm-12 col-12 ">
                        <div class="card h-100">
                            <h4 class="card-header text-white bg-info con">Add New Expense</h4>
                            <div class="card-body">
                                <form class="form-groups" action="expensedata.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <p><strong>Title:</strong></p><br>
                                        <input type="text" name="title" placeholder="Expense Name" class="form-control" required><br>
                                    </div>
                                    <div class="form-row">
                                        <p><strong>Date:</strong></p><br>
                                        <input type="date" name="date" class="form-control" min="<?php echo $_SESSION['date1'] ?>" max="<?php echo$_SESSION['date2'] ?>" required><br><br>
                                    </div>
                                    <div class="form-row">
                                        <p><strong>Amount Spent:</strong></p><br>
                                        <input type="text" name="amount"  placeholder="Amount Spent" class="form-control" required><br><br>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" value="Choose" readonly>
                                            <select name="person">
                                            <?php $query="SELECT People FROM person where Email='$email' and Title='$stitle'";
                                                            $result=mysqli_query($con,$query);?>
                                            <?php while($rows=mysqli_fetch_assoc($result)) { ?>
                                            <option ><?php echo$rows['People'] ?></option>
                                            <?php  } ?>
                                            </select>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <input type="file" name="upload" accept="image/png, image/jpeg" class="sample_class"><br>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <input role="button" class="btn  btn-block btn-info plane" type="submit"  Value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
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