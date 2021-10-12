<?php
$acode=$_GET['acode'];
include('dbcon.php');

$query=mysqli_query($cn,"select * from usertable where semail='$acode'");
$count=mysqli_num_rows($query);

if($count>0)
{
mysqli_query($cn,"update usertable set a_state='Yes' where semail='$acode'");
header('location:user_login.php');
}
else{
    header('location:index.php');
}


?>