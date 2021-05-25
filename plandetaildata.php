<?php
    session_start();
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    $title="";
    $d1="";
    $d2="";
    $budget="";
    $people="";
    $c=1;
        if(isset($_POST['title'])){
            $title = mysqli_real_escape_string($con,$_POST['title']);
            echo $title;
        }
        if(isset($_POST['d1'])){
            $d1 = $_POST['d1']; 
            echo $d1;
        }
        if(isset($_POST['d2'])){
            $d2 = $_POST['d2'];
            echo $d2; 
        }
        if(isset($_POST['budget'])){
            $budget = $_POST['budget'];
            echo $budget;
        } 
        if(isset($_POST['people'])){
            $people = $_POST['people'];
            echo $people; 
        }
        $email=$_SESSION["email"];
        if(empty($title) || empty($d1) || empty($d2) || empty($budget) || empty($people)){
            echo "<script> alert('Any field cannot be blank')</script>";
            echo"<script>location.href='plandetails.php'</script>";}
        else{   
                $reg="INSERT INTO plandetails(Title,Date1,Date2,Budget,Person,Email)values('$title','$d1','$d2','$budget','$people','$email')";
                $reg_submit=mysqli_query($con,$reg);
                $count=1;
                while($count<=$people)
                {
                    $name='person'.$count;
                    $person="";
                    if(isset($_POST[$name]))
                    {
                        $person=mysqli_real_escape_string($con,$_POST[$name]);
                    }
                    if(empty($person)){
                            $del="Delete from person where Email='$email' and Title='$title'";
                            mysqli_query($con,$del);
                            $del="Delete from plandetails where Email='$email' and Title='$title'";
                            mysqli_query($con,$del);
                            $c=0;
                            break;
                    }
                    else{
                    $reg1="INSERT INTO person(Title,People,Email)values('$title','$person','$email')" ;
                    
                    $reg1_submit=mysqli_query($con,$reg1);
                    if($reg1_submit==FALSE)
                    die(mysqli_error($con));
                    $count=$count+1;}
                }
                if($c==0){
                    echo "<script> alert('Any field cannot be blank')</script>";
                    echo"<script>location.href='plandetails.php'</script>";
                }
                else{
                    if(($reg_submit)==TRUE && $reg1_submit==TRUE)
                    {   echo $_SESSION['email'];
                        echo"<script> alert('User Successfully inserted ')</script>";
                        header('location:homepage.php');
                    }
                    else{
                    echo "<script> alert('not inserted')</script>";
                    }
                }
            
        }
?>
