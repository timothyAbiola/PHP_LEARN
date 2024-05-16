<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $db = "track";
    // create connnection
    $conn = mysqli_connect($servername, $username, $password, $db);
    // check connection
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }else{
        echo "connected successfully";
    }
?>