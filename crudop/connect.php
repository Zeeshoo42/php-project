<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p>
</body>
</html>



<?php

$host= "localhost";
$user= "root";
$pass= "";
$db= "crudop";

$con= mysqli_connect($host,$user,$pass,$db);

if ($con)
{
    echo "";
}
else
{
    echo "Not Connected";
}


?>