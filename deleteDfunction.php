<?php

 include('connection.php');

    $Did= $_GET['id'];
    
     $sql = "DELETE FROM devicereviews WHERE device_id='".$Did."'";
    
     $requestResult = (mysqli_query($connection,$sql ));
      
        
     $sql2 = "DELETE FROM device WHERE id='".$Did."'";
       $requestResult2 = (mysqli_query($connection,$sql2 ));
       
         if ( $requestResult2 ){
            $_SESSION['success'] = 'Request has been updated';
         header("Location: AdminHome.php"); }
?>

