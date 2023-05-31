<?php
include 'connect.php';
?>
<a href="index.php">Back to Form</a>

<table border="1px" cellspacing="0px" cellpadding="10px">
    <tr>
        <th>Name</th>
        <th>Father Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>
    <?php
    $query= "SELECT * FROM students";
    $data= mysqli_query($con,$query);
    $result= mysqli_num_rows($data);
    if ($result){
        while($row= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['fathername']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td> <a href="update.php? id=<?php echo $row['id']; ?>">Edit</a> </td>
                <td><a onclick="return confirm('Are You Sure to Delete it?')" href="delete.php?
                 id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php

        }
    }
    else{
        ?>
        <tr>
            <td>No Record Found</td>
        </tr>
        <?php
    }
    ?>
</table>