<?php
    session_start();
    $_SESSION['amount']=0;
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    $email=$_SESSION['email'];
    $stitle=$_SESSION['title'];
    $title="";
    $date="";
    $amount="";
    $person="";
    if(isset($_POST['title'])){
        $title = mysqli_real_escape_string($con,$_POST['title']);
    }
    if(isset($_POST['date'])){
        $date = $_POST['date']; 
    }
    if(isset($_POST['amount'])){
        $amount= $_POST['amount']; 
    }
    if(isset($_POST['person'])){
        $person = mysqli_real_escape_string($con,$_POST['person']); 
    }
        $target="images/".($_FILES['upload']['name']);
        $upload=$_FILES['upload']['name'];
        
    if(empty($title) || empty($date) || empty($person) || empty($amount) ){
        echo "<script> alert('Any field cannot be blank')</script>";
        echo"<script>location.href='viewplan.php'</script>";
    }
    else
    {   
        $reg="INSERT INTO expense(Email,Stitle,Title,Date1,Amount,People,Image)values('$email','$stitle','$title','$date','$amount','$person','$upload')";
        $reg_submit=mysqli_query($con,$reg);
        move_uploaded_file($_FILES['upload']['tmp_name'],$target);
    }
               
    if(($reg_submit )==TRUE){
        echo"<script> alert('Expense Added')</script>";
        header('location:viewplan.php');
    }
    else{
        printf("error: %s\n", mysqli_error($con));
         echo "<script> alert('not inserted')</script>";
    }   
?>

