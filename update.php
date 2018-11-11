<!-- Insert code paste here -->
 <?php
 include('connection.php');
 error_reporting(0);

  $_GET['rn'];
  $_GET['sn'];
  $_GET['cl'];

  ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <h1>Welcome</h1>

     <form class="" action="" method="get">

       Roll No. <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"><br><br>
       Name <input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"><br><br>
       Class <input type="text" name="class" value="<?php echo $_GET['cl']; ?>"><br><br>
       <input type="submit" name="submit" value="Update">

     </form>




     <?php

     if(isset($_GET['submit']))
     {
       $rollno = $_GET['rollno'];
       $name = $_GET['studentname'];
       $class = $_GET['class'];

       $query = "UPDATE STUDENT SET NAME='$name', CLASS='$class' WHERE ROLLNO='$rollno'  ";
       $data = mysqli_query($conn, $query);
       if ($data)
        {
           echo "<font color='green'>Records updated successfully. <a href='display.php'> check updated list here </a>  ";
         }
         else
          {
           echo "<font color='red'> Records Not updated. <a href='display.php'> check updated list here </a> ";
         }
     }
     else {
       echo "click on update button to save the change";
     }
 ?>

   </body>
 </html>
