<?php include 'connect.php';
$id= $_GET['id'];
$query= "DELETE  FROM students WHERE id='$id'";
$data= mysqli_query($con,$query);
if ($data)
{
 ?>

 <?php
 $query= "DELETE  FROM students WHERE id='$id'";
 $data= mysqli_query($con,$query);
  if ($data)
 {
    ?>
    <script type="text/javascript">
        alert ("Data Deleted Succesfully");
        window.open("http://localhost/crudop/display.php","_self");
    </script>
    <?php
 }
  else
 {
    ?>
    <script type="text/javascript">
        alert ("Please Try Again");
    </script>
    <?php
 }
}
?>