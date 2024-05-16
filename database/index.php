<?php
    // establish your connection to the database 
    include "./conn.php";

// Drop table if it already exists
    $sql_drop = "DROP TABLE IF EXISTS students";
    if (mysqli_query($conn, $sql_drop)) {
        echo "Table Students dropped successfully<br>";
    } else {
        echo "Error dropping table: " . mysqli_error($conn) . "<br>";
    }

    // sql to create table
    
    $sql = "CREATE TABLE students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(120) NOT NULL,
        country VARCHAR(32) NOT NULL, 
        email VARCHAR(60),
        gender VARCHAR(10),
        dob TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table Students created successfully";
        # code...
    } else {
        echo "Error creating table:" . mysqli_error($conn);
    }
    mysqli_close($conn)

?>