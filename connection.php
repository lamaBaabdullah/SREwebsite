<?php
    // Here is the include section
    // You can define the database connection, 
    // and change username or password from one place instead of running over the whole project's files.
    
    $connection = mysqli_connect("localhost", "root", "root", "sre-4");
    $error = mysqli_connect_error();

    if ($error != null) {
        echo "<p> Couldn't connect to database</p>";
    }
    session_start();
?>