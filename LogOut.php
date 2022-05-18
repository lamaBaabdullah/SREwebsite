<?php
            session_start();
            unset($_SESSION['entered']);
            unset($_SESSION['name']);
            header("Location: index.php");
        
?>

