<?php
include('connection.php');
error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Welcome</h1>

    <form class="" action="" method="post" enctype="multipart/form-data">

      Roll No. <input type="text" name="rollno" value=""><br><br>
      Name <input type="text" name="studentname" value=""><br><br>
      Class <input type="text" name="class" value=""><br><br>
      <!-- ===========for images uploading========================= -->
      uploadfile <input type="file" name="uploadfile" value=""><br><br>
      <!-- ===================================================== -->
      <input type="submit" name="submit" value="Submit">

    </form>




    <?php

    if(isset($_POST['submit'])){

      $rn = $_POST['rollno'];
      $sn = $_POST['studentname'];
      $cl = $_POST['class'];

      // ===========for images uploading=========================
      $filename = $_FILES['uploadfile']['name'];
      $tempname = $_FILES['uploadfile']['tmp_name'];
      $folder = "student/".$filename;
      move_uploaded_file($tempname, $folder);
      // =====================================================


      if($rn!="" && $sn!="" && $cl!="" && $filename!="")
      {
        $query ="INSERT INTO STUDENT VALUES ('$rn', '$sn', '$cl', '$folder')";
        $data= mysqli_query($conn, $query);

        if($data)
        {
          echo "Data Inserted";
        }
      }
      else {
        echo "ALL are req";
      }
    }

?>

  </body>
</html>
