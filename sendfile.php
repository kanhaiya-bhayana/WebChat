<?php
          include('dbcon.php');
          include('session.php');
                $target_dir = "send_files/";
                $ref=mt_rand(344,1200000);
                $dmt=date('mdY');
                $fn=$dmt.$ref;
                $uploadOk = 1;
                $sendid=$_POST['sendid'];
                $recid=$_POST['recid'];
                $tt=date('h:i:s A');
                $dd=date('d/m/Y');
                $target_file = $target_dir.$fn.basename($_FILES["fileToUpload"]["name"]);
               if ($uploadOk == 0) {
               echo "Sorry, your file was not sended.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
     
      mysqli_query($cn,"insert into usermsg (send_id,recev_id,send_file,date,time)values('$sendid','$recid','$target_file','$dd','$tt')");
      header('location:home.php?user='.$recid."#ok");
      
      
    } else {
        echo "Sorry, there was an error sending your file.";
    }
}
    
    
            
            ?>
