<?php
    $host="localhost";
    $user="root";
    $password="";
    $dp_name="loginform";

    $conn=mysqli_connect($host,$user,$password,$db_name);

    if($conn){
       echo "Connection failed";

    }
?>
