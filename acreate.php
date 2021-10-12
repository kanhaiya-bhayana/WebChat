<?php
        include('dbcon.php');
       
            $e1=$_POST['e1'];
            $e2=$_POST['e2'];
            $e3=$_POST['e3'];
            $e4=$_POST['e4'];
        
        $checkquery=mysqli_query($cn,"select * from usertable where semail='$e2'");
        
    $checknum=mysqli_num_rows($checkquery);
    if($checknum>0)
    {
        header('location:index.php?msg=2');
    }
    else{
        
            
            $to = "$e2";
$subject = "Account Activation Link | www.cyberchatter.in";

$message = "Click this activation link:<a href='http://www.cyberchatter.in/caccount.php?acode=$e2'>Activate Your Account</a> ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <activate_account@cyberchatter.in>' . "\r\n";
$headers .= 'Cc: kanhaiyabhayana1@gmail.com' . "\r\n";
$headers .= 'Bcc: divyanshujain599@gmail.com' . "\r\n";
mail($to,$subject,$message,$headers);
            
    mysqli_query($cn,"insert into usertable(sfname,semail,smobile,spass,profile_pic,a_state)values('$e1','$e2','$e3','$e4','uploads/avatar.jpg','No')");
    
    header('location:index.php?msg=1');
    }
        ?>
