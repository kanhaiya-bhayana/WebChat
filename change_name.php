<?php
          include('dbcon.php');
          include('session.php');
                $target_dir = "uploads/";
                $ref=mt_rand(344,1200000);
                $dmt=date('mdY');
                $fn=$dmt.$ref;
                $uploadOk = 1;
                $target_file = $target_dir.$fn.basename($_FILES["fileToUpload"]["name"]);
               if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      mysqli_query($cn,"update usertable set profile_pic='$target_file' where uid='$uid'");
      header('location:settings.php');
      
      
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
    
    
            
            ?>