<?php
include('dbcon.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
$checkuser=$_SESSION['login_session'];
$mpuquery=mysqli_query($cn,"select * from usertable where semail='$checkuser'");
$checkcount=mysqli_num_rows($mpuquery);

$mnrow= mysqli_fetch_assoc($mpuquery);
$uid=$mnrow['uid'];
$uname=$mnrow['sfname'];
if($checkcount<=0)
{
    header('location:user_login.php?msg=1');
}
?>