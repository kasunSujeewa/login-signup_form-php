<?php
session_start();
include("Connection.php");
include("Function.php");

$user_data = check_login($connectionDb);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <a href="logout.php">Logout</a>

    <h3>Index Page</h3>
    <br>
    <br>
    

</body>
</html>