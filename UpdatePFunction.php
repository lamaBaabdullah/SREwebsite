<?php

include('connection.php');

    $Pid= $_GET['id'];
    
    if (($_POST['major']==" ") || empty($_POST['programName']) || empty($_POST['Description']) ){
        $_SESSION['incorrect'] = 'please fill all in the form';
        header("Location: UpdateProgram.php?id=$Pid");  
    }
    
   
    else
     if (!empty($_POST['major']) && !empty($_POST['programName']) && !empty($_POST['Description']) ){
        $major = $_POST['major'] ;
        $Description = $_POST['Description'];
        $programName = $_POST['programName'];
        
       
     
         // Get file's name
        $fileName = $_FILES['file']['name'];
        // File Path (if you want to change the folder, you should create it first or you will get an error)
        $filePath = "images/".basename($fileName);
        
        
       $requestQuery = "UPDATE program SET ";
       $requestQuery .= "program_name ='$programName'";
       $requestQuery .= " , description='$Description'";
        $requestQuery .= " , major='$major'";
        
         if(move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
            // I did it here with single file
            $requestQuery .= " ,photo='$filePath' ";
        }
        $requestQuery .= "WHERE id='".$Pid."'";
        $requestResult = (mysqli_query( $connection,$requestQuery ));
    
     }
     
        if ( $requestResult ){
          $_SESSION['success'] = 'Request has been updated';
          header("Location: AdminHome.php");
        }
?>
