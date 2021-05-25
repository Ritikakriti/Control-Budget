<?php 
    session_start();
    $con=mysqli_connect("localhost:3308","root","","budget")  ;
    $email=$_SESSION['email'];
    $opass="";
    $npass="";
    $npassc="";
        if(isset($_POST['opass'])){
            $opass = mysqli_real_escape_string($con,$_POST['opass']);
            $opass=md5($opass);
        } 
        if(isset($_POST['npass'])){
            $npass = mysqli_real_escape_string($con,$_POST['npass']); 
        }
        if(isset($_POST['npassc'])){
            $npassc = mysqli_real_escape_string($con,$_POST['npassc']);
        } 
        if(empty($opass) || empty($npass) || empty($npassc)){
            echo "<script> alert('Any field cannot be blank')</script>";
            echo"<script>location.href='changepassword.php'</script>";}
        else{
            $select = "SELECT * from signup where Email='$email'and Password='$opass'";
            $result=mysqli_query($con,$select);
            if(mysqli_num_rows($result)==0){
                echo" <script> alert('Wrong Old Password Entered')</script>";
                echo"<script>location.href='changepassword.php'</script>";}
            else if(mysqli_num_rows($result)==1)
            {
                if(strlen(($npass))<6){
                    echo" <script> alert('Password must be of min six characters')</script>";
                    echo"<script>location.href='changepassword.php'</script>";
                }
                
                else if($npass!= $npassc)
                {
                    echo' <script> alert("Passwords dont match")</script>';
                    echo"<script>location.href='changepassword.php'</script>";
                }
                else if($npass== $npassc)
                {
                    $npass=md5($npass);
                    $reg="UPDATE signup SET Password='$npass' where Email='$email'";
                    $reg_submit=mysqli_query($con,$reg);
                    session_unset();
                    session_destroy();
                    echo" <script> alert('Password changed Sussessfully')</script>";
                    echo"<script>location.href='index.html'</script>";
                }
            }
        }

?>