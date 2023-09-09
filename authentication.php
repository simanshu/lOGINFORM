<?php
    include ('connection.php');
    session_start();
   
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<h1><center>Login Successful</center></h1>";
        exit();
        // Perform further actions after successful login
    } else {  
        echo "<h1>Login failed. Invalid username or password.</h1>";  
        exit();
        // Handle failed login attempt
    }
?>
