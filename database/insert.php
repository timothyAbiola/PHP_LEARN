<?php
    require "conn.php";
   $query = "INSERT INTO students(
    full_name, country, email, gender, dob
   ) VALUE('Abiola Justin', 'Nigeria', 'justin@gmail.com','male', '13-10-21')";
    if(mysqli_query($conn, $query)){
        echo "Value Entered";
    }else{
        echo "Error handling data";
    }
?>