
    <?php
    session_start();
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    $email=$_SESSION['email'];
    $stitle=$_SESSION['title'];
    if(isset($_POST['head']))
    {
        $head=$_POST['head'];
        $_SESSION['head']=$head;
    }
        $title=$_SESSION['head'];
        $query="SELECT * FROM expense where email='$email' and Stitle='$stitle' and Title='$title'";
        $result=mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        
?>
<Html>
<head>
<title>Bill | Control Budget</title>
</head>
<body>
    <form>
    <div class="form-row">
    <a href="viewplan.php" style="text-decoration:none">Go Back</a>
    </div>
    </form>
    <img src="images/<?php echo $row['Image'] ?>" class="img-reposnsive" width="60%" height="80%">
</body>
</Html>