<?php

include('connection.php');

$rollno = $_GET['rn'];
$query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno' ";

$data = mysqli_query($conn, $query);

if ($data)
{
  echo "<script>alert('Record deleted from table')</script>";
  ?>
  <!-- 0 is time in second -->
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/curd/display.php">

  <?php
}

else
{
  echo "<font color='red'> failed";
}
 ?>
