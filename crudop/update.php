<?php 
include 'connect.php' ;

  $id=$_GET['id'];

  $select= "SELECT * FROM students WHERE id='$id'";
  $data= mysqli_query($con,$select);
  $row= mysqli_fetch_array($data);
  {
?>
    <div>
    <form action="" method="post" autocomplete="off">
        <input value="<?php echo $row['name'] ?>" type="text" name="name" placeholder="Name"><br><br>
        <input value="<?php echo $row['fathername'] ?>" type="text" name="fathername" placeholder="Father Name"><br><br>
        <input value="<?php echo $row['email'] ?>" type="text" name="email" placeholder="Email ID"><br><br>
        <input value="<?php echo $row['password'] ?>" type="text" name="password" placeholder="Password"><br><br>
        <input value="<?php echo $row['age'] ?>" type="number" name="age" placeholder="Age"><br><br>
        <input type="submit" name="update" value="Update">
        <button><a href="display.php">Back</a></button>

    </form>
</div>
<?php
  }
  ?>
  

  
      <?php
  
  if (isset($_POST['update']))
  {
     $name= $_POST['name'];
     $fname=$_POST['fathername'];
     $mail=$_POST['email'];
     $password=$_POST['password'];
     $age=$_POST['age'];
  
  
     $update= mysqli_query($con,"UPDATE `students` SET  `name`='$name',`fathername`='$fname',
     `email`='$mail',`password`='$password',`age`='$age' WHERE id='$id' ");
  
    
  
      if ($update)
      {
          ?>
          <script type="text/javascript">
              alert("Data Updated Successfuly");
              window.open("http://localhost/crudop/display.php"),("self");
  
          </script>
          <?php
      }
          else
          {
              ?>
              <script type="text/javascript">
                  alert("Please Try Again");
  
              </script>
  
              <?php
          }
  
      
  
  }
  ?>