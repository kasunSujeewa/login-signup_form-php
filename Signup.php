<?php 
    session_start();
    include('Connection.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password)){
            $user_id = random_int(100000,999999);
            $query = "insert into users (user_id,password,user_name) values('$user_id','$password','$user_name')";

            mysqli_query($connectionDb,$query);

            header("Location: login.php");
            die;

        }
        else{
            echo "Form validation failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="login-box">
        <form action="" method="POST">
            <h2>Signup</h2>
            <input type="text" name="user_name" placeholder="User Name">
            <br>
            <br>
            <input type="password" name="password" id="password" placeholder="Password">
            <br>
            <br>
            <button class="signupBt" type="submit">Signup</button>
            <br>
            <br>
            <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>