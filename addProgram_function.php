<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>addProgram_function</title>
</head>
<body>

<?php
include('connection.php');

 if (empty($_POST['text']) && empty($_POST['textarea']) && ($_POST['major']== " ") )
{
$_SESSION['incorrect']  = "please fill all entres";
header("Location: addProgram.php?");     
}

else 
if (($_POST['major']== " "))
{
$_SESSION['incorrect']  = "Enter Program major ";
header("Location: addProgram.php?");     
} 

else 
if (empty($_POST['text']))
{
$_SESSION['incorrect']  = "Enter Program Name ";
header("Location: addProgram.php?");     
} 

else
if(empty($_POST['textarea']))
{
$_SESSION['incorrect']  = "Enter Program Description";
header("Location: addProgram.php?");  
}
else
if (empty($_FILES["file"]["name"]))
{ 
$_SESSION['incorrect']  = "Add program photo";
header("Location: addProgram.php");  
//no image
}
// has image

      if (!empty($_POST['text']) && !empty($_POST['textarea']) && !($_POST['major']== " ") ){
             $Description = $_POST['textarea'];
             $deviceName = $_POST['text'];
             $major = $_POST['major'] ;
         // Get file's name
        $fileName = $_FILES['file']['name'];
        
        // File Path (if you want to change the folder, you should create it first or you will get an error)
        $filePath = "images/".basename($fileName);
       
   
      if(move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
        $query="INSERT INTO program(program_name , description ,major, photo ) VALUES('$deviceName','$Description','$major' , '$filePath')";
        
           $requestResult = (mysqli_query( $connection, $query ));
     }
     }


        if ( $requestResult ){
          header("Location: AdminHome.php");
        }
?>
</body>
</html>
