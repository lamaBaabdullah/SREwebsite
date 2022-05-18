<?php
   
    
    $connection = mysqli_connect("localhost", "root", "root", "sre-4");
    $error = mysqli_connect_error();

    if ($error != null) {
        echo "<p> Couldn't connect to database</p>";
    }
    session_start();
?>
