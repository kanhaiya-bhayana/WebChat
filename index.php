<?php error_reporting(0);?>

<html>
    <head>
        <title>Cyber Chatter V1.0</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ex.css">
            
    </head>
    <body style="background:url('myblur.jpg');background-size: cover"> 
    <center>
        <?php
        $msg=$_GET['msg'];
        if($msg==1)
        {
        ?>
        <p style="border-radius:4px;width:500px;background:green;padding:10px;font-family:arial;color:white"> Account Created Successfully, Check your gmail now.</p>
        <?php
        
        }
        else if($msg==2)
        {
        ?>
        <p style="border-radius:4px;width:500px;background:red;padding:10px;font-family:arial;color:white">! This Email Address already in use. Please try with new email account.</p>
        <?php
        
        }
        ?><br>
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
                    <form method="post" action="acreate.php">
                        <table border="0px">
                            <tr>
                                <td><br>
                                    <h1 style="font-family:arial">Register</h1>
                                    <span style="font-family:arial;font-size:11pt">Don't have an account? <span style="color:limegreen">Create your account</span>, it takes less than a minute.</span>
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                                    <input name="e1" value="" autocomplete="off" type="text" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Full Name">
                                </td>
                            </tr>
                            <tr></tr><tr></tr>

                            <tr>
                                <td>
                            <input name="e2" value="" autocomplete="off" type="email" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Email Address">
                                </td>
                            </tr>
                            <tr></tr><tr></tr>
                            <tr>
                                <td>
                            <input name="e3" value="" type="text" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Mobile Number">
                                </td>
                            </tr>
                            <tr></tr><tr></tr>
                            <tr>
                                <td>
                            <input name="e4" value="" type="password" required style="width:450px;height:40px;font-size:13pt;border-radius:3px;border:solid;border-width:0.5px;padding:10px" placeholder="Password">
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                                    <input type="radio" required  onclick="show()"> <span style="color:grey;font-family:arial;font-size:10pt;">I Accept terms & condition and privacy policy.</span>
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                            <button id="rr" type="submit" style="display:none;width:150px;height:40px;font-size:13pt;float:right;border-radius:100px;background:red;color:white;border:none">
                            REGISTER
                            </button>    
                            </td>
                            </tr>
                         <script>
                             function show(){
                                 document.getElementById('rr').style.display="block"
                             }
                             
                             
                             </script>
                        </table>
                        </form>
                        <hr><br>
                        <span style="color:grey;font-family:arial;font-size:11pt;">Already member? please login.</span><br><br>
                        <a href="user_login.php">
                        <button  style="width:150px;height:40px;font-size:13pt;;border-radius:100px;background:white;color:black;border:solid;border-width:0.5px">
                            LOGIN
                        </button> </a><br><br>
                        &nbsp;
                        
                    
                </td>
                                <td style="width:20px"></td>
            </tr>
            
            
        </table>
        
        
        
    </center>
        
        
    </body>
</html>


        
        
        ?>