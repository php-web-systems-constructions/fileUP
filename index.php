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
<title><?= $dTitle ?></title>
<link rel="stylesheet" href="core/main.css">
</head>
<body>
<div class="content">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="text"><?= $messageInfoChoose ?></div><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br><input type="submit" value="<?= $messageInfoButton ?>" name="submit" class="button">
</form>
</div>
</body>
</html>
