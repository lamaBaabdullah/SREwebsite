<?php

include('connection.php');
 if (empty($_POST['text']) && empty($_POST['textarea']) )
 {
$_SESSION['incorrect']  = "please fill all entres";
header("Location: addDevice.php?");     
}

else 
if (empty($_POST['text']))
{
$_SESSION['incorrect']  = "Enter Device Name ";
header("Location: addDevice.php?");     
} 

else
if(empty($_POST['textarea']))
{
$_SESSION['incorrect']  = "Enter Devise Description";
header("Location: addDevice.php?");  
}
else 
if (empty($_FILES["file"]["name"]))
{ 
$_SESSION['incorrect']  = "Add device photo";
header("Location: addDevice.php");  
}

    
    
    
     if (!empty($_POST['text']) && !empty($_POST['textarea']) ){
        $Description = $_POST['textarea'];
        $deviceName = $_POST['text'];
       
         // Get file's name
        $fileName = $_FILES['file']['name'];
         
        // File Path (if you want to change the folder, you should create it first or you will get an error)
        $filePath = "images/".basename($fileName);
        
   
      if(move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
        $query="INSERT INTO device(device_name , description , photo ) VALUES('$deviceName','$Description', '$filePath')";
        
           $requestResult = (mysqli_query( $connection, $query ));
     }
     }
        if ( $requestResult ){
          $_SESSION['success'] = 'Request has been updated';
          header("Location: AdminHome.php");
        }
?>
