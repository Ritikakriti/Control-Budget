<?php
    session_start();
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    $email="";
    $name="";
    $password="";
    $phone="";
        if(isset($_POST['name'])){
            $name = mysqli_real_escape_string($con,$_POST['name']);
        }
        if(isset($_POST['email'])){
            $email = mysqli_real_escape_string($con,$_POST['email']); 
        }
        if(isset($_POST['password'])){
            $password = mysqli_real_escape_string($con,$_POST['password']);
        }
        if(isset($_POST['phone'])){
            $phone = $_POST['phone']; 
        }
        $regemail="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
        if(empty($email) || empty($password) || empty($name) || empty($phone)){
            echo "<script> alert('Any field cannot be blank')</script>";
            echo"<script>location.href='Signup.php'</script>";}
        else if(!preg_match($regemail,$email)){
            echo"<script>alert(Enter a valid email)</script>";
            echo"<script>location.href='Signup.php'</script>";}
        else if(strlen($password)<6){
            echo "<script> alert('password must be greater than or equal to 6 characters')</script>";
            echo"<script>location.href='Signup.php'</script>";}
        else if(!is_numeric($phone) || strlen($phone)!=10){
            echo "<script> alert('Phone number must be numeric and of length 10')</script>";
            echo"<script>location.href='Signup.php'</script>";}
        else{
            $select = "SELECT * from signup where Email='$email'";
            $result=mysqli_query($con,$select);
            if(mysqli_num_rows($result) !=0){
                
                echo"<script> alert('Email id already registered') </script>";
                echo"<script>location.href='Signup.php'</script>";
                }
            else
            {   
                $password=md5($password);
                $reg="INSERT INTO signup(Name,Email,Password,Phone)values('$name','$email','$password','$phone')";
                $reg_submit=mysqli_query($con,$reg);
                if(($reg_submit)==TRUE)
                {
                    $_SESSION['email']=$email;
                    echo"<script> alert(' $email Successfully Registered')</script>";
                    echo"<script>location.href='homepage.php'</script>";
                }
                else{
                echo "<script> alert('not inserted')</script>";
                }
            }
            
        }
?>