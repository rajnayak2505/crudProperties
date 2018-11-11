<style media="screen">
  td{
    padding: 10px;
  }
</style>


<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";

$data = mysqli_query($conn, $query);

// this for showing number of rows of databasee
// total is a variable
$total = mysqli_num_rows($data);

//display the databasee records by using mysqli_fetch_assoc(write the query)
// $result is a variable store the query mysqli_fetch_assoc($data);
 // $result = mysqli_fetch_assoc($data);

echo $result['rollno']." ".$result['name']." ".$result['class'];

if($total != 0)
{

  ?>

  <table>
    <tr>
    <th>Roll No</th>
    <th>Profile</th>
    <th>Name</th>
    <th>Class</th>
    <th colspan="2">Operations</th>
    </tr>


  <?php

  while ($result = mysqli_fetch_assoc($data))
  {
    echo "  <tr>
                <td>".$result['rollno']."</td>
                <td><img src='".$result['image']."' height='100' width='100' /></td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>

                <td> <a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'> Edit </a> </td>
                <td> <a href='delete.php?rn=$result[rollno]'  onclick='return checkdelete()'> Delete </a> </td>
            </tr>";
  }
}

else {
  echo "No records Found";
}

 ?>

 </table

?>
<script>
function checkdelete()
{
  return confirm('are sure u want delete data ?');
}
</script>
<?php
