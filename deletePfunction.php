<?php

 include('connection.php');

    $Pid= $_GET['id'];
    
     $sql = "DELETE FROM programreviews WHERE program_id='".$Pid."'";
    
     $requestResult = (mysqli_query($connection,$sql ));
      
        
     $sql2 = "DELETE FROM program WHERE id='".$Pid."'";
       $requestResult2 = (mysqli_query($connection,$sql2 ));
       
         if ( $requestResult2 ){
            $_SESSION['success'] = 'Request has been updated';
         header("Location: AdminHome.php"); }
?>

