<?php
error_reporting(0);
include ('dbcon.php');
include('session.php');
?>
<?php
      $userk=$_GET['user'];
      $mquery=mysqli_query($cn,"select * from usertable where uid='$userk'");
      while($rowkp= mysqli_fetch_array($mquery))
      {
          $name=$rowkp['sfname'];
          $pic=$rowkp['profile_pic'];
      }
      
      ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Cyber Chatter</title>
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

    <body>
    <center>
        <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post" enctype="multipart/form-data" action="sendfile.php">
        Select file to send...
        <input type="text" name="sendid" value="<?php echo $uid;?>" style="display:<?php echo"none";?>">
        <input type="text" name="recid" value="<?php echo $userk;?>" style="display:<?php echo"none";?>">
        <input type="file" name="fileToUpload">
        <button type="submit">Send</button>
    </form></p>
  </div>

</div>
<table border="0px" style="width:100%">
    <tr>
        <td width="30%">
            <div style="height:600px;overflow-x: scroll;overflow-x:hidden">
            
            
         <table border="0px" width="100%">   
             <tr>
                 <td align="center" style="background:red;border-radius:10px 10px 0px 0px">
             <h1 style="padding:10px;font-family: arial;color:white">Cyber Chatter</h1>
             </td>
             </tr>
             <tr>
                 <td style="padding:10px" align="center">
                     <form method="post">
                         <input name="frnd" type="search" placeholder="Find your friends" style="padding:4px;border:solid;border-width:0.7px;border-radius:10px 0px 10px 0px;width:350px;height:30px;font-size:12pt">
                         <button style="height:30px">Find</button>
                     </form>  
                    
                     <?php
                   if(isset($_POST['frnd']))
                   {
                       $frnd=$_POST['frnd'];
                       header('location:home.php?frnd='.$frnd);
                       
                   }
                     
                     ?>
                     
                 </td>
                 
             </tr>
             
             <tr><td>
             <h3 style="padding:5px;font-family:arial;text-align:center">Search Results</h3>
             </td>
             </tr>
               
             
             
             <?php
             $ff=$_GET['frnd'];
             if($ff!="")
             {
             $kquery=mysqli_query($cn,"select * from usertable where sfname like '%$ff%'");
             while($row=mysqli_fetch_array($kquery))
             {
             ?>
             
             <tr>
                 
                 <td style="font-family:arial;padding:10px;">
                     <a style="text-decoration:none;color:black" href="home.php?user=<?php echo $row['uid'];?>">
                     <img src="<?php echo $row['profile_pic'];?>" style="border-radius:100px;height:40px;width:40px" align="center">
                     <?php echo $row['sfname'];?></a></td>   
           
             </tr>
             <?php
             }
             }
             ?>
             
             
             <tr><td>
             <h3 style="padding:5px;font-family:arial;text-align:center">All Friends</h3>
             </td>
             </tr>
             
             <?php
             
             $kquery=mysqli_query($cn,"select * from usertable where uid!='$uid'");
             while($row=mysqli_fetch_array($kquery))
             {
             ?>
             
             <tr>
                 
                 <td style="font-family:arial;padding:10px;">
                     <a style="text-decoration:none;color:black" href="home.php?user=<?php echo $row['uid'];?>">
                    
                     <img src="<?php echo $row['profile_pic'];?>" style="border-radius:100px;height:40px;width:40px" align="center">
                     <?php echo $row['sfname'];?>                     </a>
</td>   
             </tr>
             <?php
             }
             ?>
             
             
             
         </table>
            
                </div>
                
        </td>
        
        <td width="1%"></td>
      
        <td width="69%"> 
            <table border="0px" width="100%">
                <tr>
                    <td colspan="2">
                        <p style="font-family:arial"><img src="<?php echo $pic;?>" style="border-radius:100px;width:40px;height:40px" align="center"> <?php echo $name;?>  <a href="logout.php" style="float:right;padding:10px;border-radius:10px;background:red;color:white;text-decoration:none;">Logout</a> 
                            
                            <a href="settings.php" style="float:right;padding:11px;border-radius:10px;background:black;color:white;text-decoration:none;"><i class="fas fa-user-cog" style="float:right"></i></a>
                        
                        
                        </p>
                        <hr>
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="2" style="height:400px;">
                        <div style="height:400px;overflow-x: scroll;overflow-x:hidden">    
                        
                <?php
                $fetchmsg=mysqli_query($cn,"select * from  usermsg where send_id='$uid' and recev_id='$userk' or send_id='$userk' and recev_id='$uid'");
                while($msgrow= mysqli_fetch_array($fetchmsg))
                {
                $send=$msgrow['send_id'];
                $recv=$msgrow['recev_id'];
                
                if($send==$uid)
                {
                    ?>
                        
                <li style="text-align:right;list-style:none;padding:5px;font-family:arial;font-size:11pt">
                    <span style="text-align:right;list-style:none;padding:5px;font-family:arial;font-size:11pt;background:greenyellow">
                    <?php echo $msgrow['mymsg'];?>
                        <a href="<?php echo $msgrow['send_file'];?>"><?php echo $msgrow['send_file'];?></a>   
                </span>
                     <br><br>
                        <font style="color:grey;font-size:9pt"><?php echo $msgrow['time'];?></font> 
                </li> 
                <br>
                        <?php
                }
                if($recv==$uid)
                {
                    ?>
                
                <li style="text-align:left;list-style:none;padding:5px;font-family:arial;font-size:11pt">
                    <span style="text-align:right;list-style:none;padding:5px;font-family:arial;font-size:11pt;background:black;color:white;border-radius: 10px ">
                    <?php echo $msgrow['mymsg'];?>
                        <br>
                                              <a href="<?php echo $msgrow['send_file'];?>"><?php echo $msgrow['send_file'];?></a>     

                </span>
                        <br><br>
                        <font style="color:grey;font-size:9pt"><?php echo $msgrow['time'];?></font>  
                </li> 
                <br>
                
                
                <?php
                }
                    }
                
                ?>
                
                <li style="list-style:none" id="ok"></li>     
                        
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                                        <form method="post"> 

                <tr>

                    <td width="900px">
                <textarea type="textarea" name="mymsg" style="width:97%;height:40px;padding:10px" placeholder="Send your message...."></textarea>
                    </td>
                    <td>
                <button type="submit" style="height:60px;width:120px">Send</button>   
                <button id="myBtn" type="button" style="background:black;border-radius:4px;color:white;border:none;padding:5px">
                    <i class="fas fa-paperclip"></i></button>
                <button onclick="mload()">Refresh</button>
                <br>
                    </td> 
                    
                </tr>
                                        </form>
               



                <?php
                if(isset($_POST['mymsg']))
                {
                    $mymsg=$_POST['mymsg'];
                    $recev_id=$userk;
                    $send_id=$uid;
                    $dd=date('d-m-Y');
                    $tt=date('h:i:s a');
                    mysqli_query($cn,"insert into usermsg(send_id,recev_id,mymsg,date,time)values('$send_id','$recev_id','$mymsg','$dd','$tt')");
                    header('location:refresh.php?user='.$userk);
                }
                ?>
                
            </table>
        </td>
         <script>
        function mload()
        {
            location.href="<?php echo 'home.php?user='.$userk; ?>#ok";
        }
        
        </script>
</tr>
</table>    
        <span style="font-family:arial;padding:10px;margin-left: 300px"><b>Designed & Developed by:</b> Divyanshu Jain & Kanhaiya Bhayana</span>
        </center>
    
    

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    </body>
   
    
</html>