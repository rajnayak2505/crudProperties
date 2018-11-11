<?php
error_reporting(0);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post" enctype="multipart/form-data">
       <input type="file" name="uploadfile" value=""><br><br>
       <input type="submit" name="submit" value="Upload"><br><br>

     </form>

   </body>
 </html>



<?php

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = "student/".$filename;

move_uploaded_file($tempname, $folder);

echo "<img src='$folder' height='100' width='100' />";
 ?>
