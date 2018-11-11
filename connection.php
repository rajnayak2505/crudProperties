<?php
error_reporting(0);
// declare varibale for query
$servername = "localhost";
$username = "root";
$password = "";
$$dbname = "curd";

// this query function for db
// mysqli_connect($servername, $username, $password, $$dbname);


// check connection
//create a variable $conn
//and put the query on this varibale
$conn = mysqli_connect($servername, $username, $password, $$dbname);


// chech condition
if($conn){
  echo "";
}
else {
  // echo " connection is failed";
              // OR
  //die is return reson of Error with using .mysqli_connect_error()
  die("connection is failed".mysqli_connect_error());
}

 ?>
