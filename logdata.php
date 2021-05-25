<?php
    session_start();
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    
        $email="";
        $password="";
        if(isset($_POST['email'])){
            $email = mysqli_real_escape_string($con,$_POST['email']); 
        }
        if(isset($_POST['password'])){
            $password = mysqli_real_escape_string($con,$_POST['password']); 
            $password=md5($password);
        }
        $regemail="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
        if(empty($email) || empty($password)){
            echo "<script> alert('Any field cannot be blank')</script>";
            //echo"<script>location.href='login.php'</script>";
        }
        else if(!preg_match($regemail,$email)){
            echo"<script>alert(Enter a valid email)</script>";
            echo"<script>location.href='login.php'</script>";}
        else{
            $select = "SELECT * from signup where Email='$email'and password='$password'";
            $result=mysqli_query($con,$select);
            if(mysqli_num_rows($result)==1)
            {
                    $_SESSION['email']=$email;
                    echo"<script>location.href='homepage.php'</script>";  
            }

            else
            {  
                echo"<script> alert('Invalid Email or password')</script>";
                echo"<script>location.href='login.php'</script>";
            }
            
    }    
    
?>