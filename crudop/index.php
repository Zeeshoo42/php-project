<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h3>Student Form</h3>
    <div>
        <form action="" method="post" autocomplete="off">
            <input type="text" name="name" placeholder="Name"><br><br>
            <input type="text" name="fathername" placeholder="Father Name"><br><br>
            <input type="text" name="email" placeholder="Email ID"><br><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <input type="number" name="age" placeholder="Age"><br><br>
            <input type="submit" name="save" value="Submit">
            <button><a href="display.php">View</a></button>

        </form>
    </div>
</body>
</html>



<?php

if (isset($_POST['save']))
{
   $name= $_POST['name'];
   $fname=$_POST['fathername'];
   $mail=$_POST['email'];
   $password=$_POST['password'];
   $age=$_POST['age'];

   $query= "INSERT INTO students (name,fathername,email,password,age)
    VALUES('$name','$fname','$mail','$password','$age')";

    $data= mysqli_query($con,$query);

    if ($data)
    {
        ?>
        <script type="text/javascript">
            alert("Data Saved Successfuly");

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