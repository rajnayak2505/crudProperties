<?php
// start session variable
session_start();

include('connection.php');

?>


 <form class="" action="" method="post">
   <input type="text" name="username" value=""><br><br>
   <input type="password" name="password" value=""><br><br>
   <input type="submit" name="submit" value="Login">
 </form>


<?php

if(isset($_POST['submit']))
{
  $user = $_POST['username'];
  $pwd = $_POST['password'];

  $query = "SELECT * FROM STUDENT WHERE username='$user' && password='$pwd'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);

  if($total==1)
  {
    //after start session
    $_SESSION['user_name'] = $user;
    header('location:home.php');
  }
  else
  {
    "Login Failed";
  }

}
 ?>
