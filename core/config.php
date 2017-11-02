<?php
/* ********** + **********
  This is under MIT license
     2017 (c) KaminekLP
   ********** + ********** */  

/*  --- fileUP! main config --- 
    
    [!] All URL MUST be with http:// or https:// [!]
    [!] All URL MUST be end with / [!]
    [!] All diretory names MUST be like img/! No like /img/ or /img! [!]

*/ 


/* Home URL */ 
$homeUrl = "http://myPage.com/";

/* Default title */
$dTitle = "fileUP!";

/* File directory. In this dir will be save all files */
$fDir = "myFiles/";



/* ---------- Messages ---------- */


/* +++ Errors +++ */

/* Error title */
$messageErrTitle = "Error!" ;

/* File with same name alredy exists */
$messageErrAlredyExist = "File with this name is alredy uploaded!";

/* File has got too large size */
$messageErrLargeSize = "File is too large!";

/* File has got illegal format */
$messageErrNoAllowedFormat = "File has got not allowed format! Supported formates are JPEG, JPG, PNG and GIF!";

/* General error information (two lines) */
$messageErrFileUploadError1 = "Error when uploading your image!";   // First line
$messageErrFileUploadError2 = "More details in the top right corner.";   // Second line

/* Fatal error */
$messageErrFatal = "Error when uploading image. Please, contact an administrator.";


/* +++ Success +++ */

/* Success title */
$messageOkTitle = "Success!";

/* File has been successlly uploaded to adress ... */
$messageOkUploaded = "File has been succesfully uploaded to adress";


/* +++ General informations and texts +++ */ 

/* Text. Choose a file */
$messageInfoChoose = "Please select a file to upload:";

/* Text in button */
$messageInfoButton = "Upload";
?>
