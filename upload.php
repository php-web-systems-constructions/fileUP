<?php
/* ********** + **********
  This is under MIT license
     2017 (c) KaminekLP
   ********** + ********** */ 
   
/* Include config */
include "core/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?= $dTitle ?>
    </title>
    <link rel="stylesheet" href="core/uploadCss.css">
    <link rel="stylesheet" href="core/main.css">
  </head>
  <body>
<?php
/* Sets evrything is needed */
$target_dir = $fDir;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


/* Check if image file is a actual image or fake image */
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        echo "";
        $uploadOk = 0;
    }
}


/* Check if file already exists */
if (file_exists($target_file)) {
    echo "<div class='subError'>". $messageErrAlredyExist . "</div>";
    $uploadOk = 0;
}


/* Check file size - adjustable in config */
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "<div class='subError'>" . $messageErrLargeSize . "</div>";
    $uploadOk = 0;
}


/* Allow certain file formats */
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "avi" 
&& $imageFileType != "txt" && $imageFileType != "zip" && $imageFileType != "rar" 
&& $imageFileType != "tar.gz" ) {
    echo "<div class='subError'>" . $messageErrNoAllowedFormat . "</div>";
    $uploadOk = 0;
}


/* Check if all ok */
if ($uploadOk == 0) {
    echo "<div class='error'><div class='titleErr'>" . $messageErrTitle . "</div>" . $messageErrFileUploadError1 . "<br>" . $messageErrFileUploadError2 . "</div>";
    
    
/* If everything is ok, try to upload file */
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<div class='ok'><div class='titleOk'>" . $messageOkTitle . "</div>" . $messageOkUploaded . "<br><pre>" . $homeUrl . "" . $fDir . "". basename( $_FILES['fileToUpload']['name']);
    } else {
        echo "<div class='error'>" . $messageErrFatal . "</div>";
    }
}

    ?>
    <footer class="footer">
<hr>
<!-- DO NOT REMOVE FOLLOWING TEXT, IF YOU HAVENT GOT PAID LICENSE! IF YOU REMOVE THIS, YOU WILL BY VERY IT RISK!!! --> 
<div class="copy">
Powered by <a href="https://github.com/kamineklp/fileup" class="href" target="_blank">fileUP!</a> created by KaminekLP
</div>
<!-- DO NOT REMOVE TO HERE -->
<div class="owntext">
<?php echo $messageInfoOwnCopy; ?>
</div>
</footer>
  </body>
</html>
