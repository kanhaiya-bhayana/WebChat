<?php
error_reporting(0);
include ('dbcon.php');
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings | Cyber Chatter</title>
    </head>
    <body>
    <center>
        <h1 style="font-family:arial;background:red;color:white;padding:10px">Update Profile Settings (<?php echo $uname;?>)</h1>
        <a href="home.php" style="padding:10px;background:black;color:white">Back</a><br><br><br>
        <table border="2px">
            <tr>
                <td style="font-family:arial;font-size:12pt;padding:10px">Full Name</td>
                
            <form method="post">
                <td style="font-family:arial;font-size:12pt;padding:10px">
                    <input name="e1" type="text"> 
                    <button type="submit" style="background:black;padding:5px;color:white;border:none">Change</button>
            </form>   
            <!--Name Update Module Query-->
            <?php
            if(isset($_POST['e1']))
            {
                $name=$_POST['e1'];
                mysqli_query($cn,"update usertable set sfname='$name' where uid='$uid'");
            }
            
            ?>
            
                </td>
            
            </tr>
            <tr>
                <td style="font-family:arial;font-size:12pt;padding:10px">Change Password</td>
                <td style="font-family:arial;font-size:12pt;padding:10px">
                    <form method="post">
                    <input type="password" name="e2"> 
                    <button type="submit" style="background:black;padding:5px;color:white;border:none">Change</button></td>
                </form>    
                    <!--Password Update Module Query-->
            <?php
            if(isset($_POST['e2']))
            {
                $passd=$_POST['e2'];
                mysqli_query($cn,"update usertable set spass='$passd' where uid='$uid'");
            }
            
            ?>
        </tr>
            <tr>
                <td style="font-family:arial;font-size:12pt;padding:10px">Change Mobile</td>
                <td style="font-family:arial;font-size:12pt;padding:10px">
                    <form method="post">
                    <input type="text" name="e3"> 
                    <button  type="submit" style="background:black;padding:5px;color:white;border:none">Change</button>
                    </form>
                         <!--Mobile Update Module Query-->
            <?php
            if(isset($_POST['e3']))
            {
                $mob=$_POST['e3'];
                mysqli_query($cn,"update usertable set smobile='$mob' where uid='$uid'");
            }
            
            ?>
                    </td>
            </tr>
            <tr>
                <td style="font-family:arial;font-size:12pt;padding:10px">Profile Pic</td>
                <td style="font-family:arial;font-size:12pt;padding:10px">
                    <form method="post" enctype="multipart/form-data" action="change_name.php">
                    <input type="file" name="fileToUpload"> 
                    <button name="my" type="submit" style="background:black;padding:5px;color:white;border:none">Upload</button>
                         <!--Profile Pic Update Module Query-->
           
                    
                    
                    </form>
                </td>
            </tr>
        </table>
    </center>
        
        
    </body>
    
</html>