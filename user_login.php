<?php
error_reporting(0);
?>
<html>
    <head>
        <title>Cyber Chatter V1.0</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ex.css">
            
    </head>
    <body style="background:url('myblur.jpg');background-size: cover"> 
    <center><br><br>
        <table border="0px" style="width:980px;background:white;border:none;border-radius:4px">
            <tr>
                <td style="width:650px;background:url('sunset.jpg');background-size: cover">
                    <span style="font-family:arial;font-size:25pt;color:white;padding:20px">Cyber</span><br>
                    <span style="font-family:arial;font-size:35pt;color:white;padding:20px">Chatter</span>
                    <span style="font-family:arial;font-size:15pt;color:white;margin-left:-20px;color:yellow">V1.0</span><br><br>
                     <span style="font-family:arial;font-size:12pt;color:white;padding:20px">Lets Chat with your friends.</span>
                     <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                &nbsp;
                </td>
                <td style="width:20px"></td>
                <td style="background:white;width:450px;">
                    <form method="post">
                        <table border="0px">
                            <tr>
                                <td><br>
                                    <h1 style="font-family:arial">Login</h1>
                                    <span style="font-family:arial;font-size:11pt">Ready to go Online with your friends.</span>
                                </td>
                            </tr>
                            <tr>
                                <td><br>

                            <tr>
                                <td>
                            <input name="uname" type="email" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Email Address">
                                </td>
                            </tr>
                            <tr></tr><tr></tr>
                            <tr>
                                <td>
                            <input name="pass" type="password" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Password">
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                            <button type="submit" style="width:150px;height:40px;font-size:13pt;float:right;border-radius:100px;background:red;color:white;border:none">
                            LOGIN
                            </button>    
                            </td>
                            </tr>
                         <?php
                         include('dbcon.php');
                         if(isset($_POST['uname']))
                         {
                         $uname=$_POST['uname'];
                         $pass=$_POST['pass'];    
                         $query= mysqli_query($cn, "select semail,spass,a_state from usertable where semail='$uname' and spass='$pass'");
                         $count= mysqli_num_rows($query);
                         while($row=mysqli_fetch_array($query))
                         {
                             $astate=$row['a_state'];
                         }
                         
                         if($count>0 && $astate=='Yes')
                         {
                             // Global User Login Parameter to identify current user
                             session_start();
                             $_SESSION['login_session']=$uname;
                             header('location:home.php');
                         }
                         else
                         {
                             header('location:user_login.php?msg=1');
                         }
                         }
                         
                         
                         
                         ?>
                        </table>
                        </form>
                    
                    <?php
                    $msg=$_GET['msg'];
                    if($msg==1)
                    {
                    ?>
                    <p style="color:red;font-family:arial">Wrong Input Details. Login Failed</p>
                    
                    <?php
                    }
                    ?>
                    
                    <hr><br><br><br><br><br><br><br><br>
                        <span style="color:grey;font-family:arial;font-size:11pt;">Don't have an account? ? Create Account.</span><br><br>
                        <a href="index.php">
                        <button  style="width:150px;height:40px;font-size:13pt;;border-radius:100px;background:white;color:black;border:solid;border-width:0.5px">
                            Create Account
                        </button> </a>
                        <br><br>&nbsp;
                    
                </td>
                                <td style="width:20px"></td>
            </tr>
            
            
        </table>
        
    </center>
        
        
    </body>^
</html>


