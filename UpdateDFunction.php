<?php

include('connection.php');

    $Did= $_GET['id'];
    
    if (empty($_POST['deviceName']) || empty($_POST['Description']) ){
        $_SESSION['incorrect'] = 'please fill all in the form';
        header("Location: UpdateDevice.php?id=$Did");  
    }
    
   
    
     if (!empty($_POST['deviceName']) && !empty($_POST['Description']) ){
        $Description = $_POST['Description'];
        $deviceName = $_POST['deviceName'];
        
       
     
         // Get file's name
        $fileName = $_FILES['file']['name'];
        // File Path (if you want to change the folder, you should create it first or you will get an error)
        $filePath = "images/".basename($fileName);
        
   
        
       $requestQuery = "UPDATE device SET ";
       $requestQuery .= "device_name ='$deviceName'";
       $requestQuery .= " , description='$Description'";
      
         if(move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
            // I did it here with single file
            $requestQuery .= " ,photo='$filePath' ";
        }
        
        $requestQuery .= "WHERE id='".$Did."'";
        $requestResult = (mysqli_query( $connection,$requestQuery ));
     }
     
        if ( $requestResult ){
          $_SESSION['success'] = 'Request has been updated';
          header("Location: AdminHome.php");
        }
?>

