
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>addDevice_function</title>
</head>
<body>

<?php
include('connection.php');

$programName= $_POST['text'];
$Description= $_POST['textarea'];
$major=$_POST['major'];

if (empty($programName) && empty($Description)&& $major==" " )
{
$_SESSION['incorrect']  = "please fill all entres";
header("Location: addProgram.php?");     
}

else 
if ($major==" ")
{
$_SESSION['incorrect']  = "Enter Ptogram major ";
header("Location: addProgram.php?");     
} 

else 
if (empty($programName))
{
$_SESSION['incorrect']  = "Enter Program Name ";
header("Location: addProgram.php?");     
} 

else
if(empty($Description))
{
$_SESSION['incorrect']  = "Enter Program Description";
header("Location: addProgram.php?");  
}
else
{
//no image
if (empty($_FILES["image"]["name"]))
{ 
$_SESSION['incorrect']  = "Add program photo";
header("Location: addProgram.php?"); 
}
else // has image
{
// Get file info 
$fileName = basename($_FILES["image"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
// Allow certain file formats 
$allowTypes = array('jpg','png','jpeg','gif'); 
if(in_array($fileType, $allowTypes)){ 
$image = $_FILES['image']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image)); 
// Insert image content into database 
$query="INSERT INTO program (program_name, description,	major ,photo) VALUES('$programName','$Description','$major','$imgContent')";
$result = mysqli_query($connection, $query);
}
}
}


if($result)
{
$ProgramID = mysqli_insert_id($connection);
header('Location: ProgramsPage.php?$programID='.$ProgramID);
}
//end
?>
</body>
</html>