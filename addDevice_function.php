
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>addDevice_function</title>
</head>
<body>

<?php
include('connection.php');

$deviseName= $_POST['text'];
$Description= $_POST['textarea'];

if (empty($deviseName) && empty($Description) )
{
$_SESSION['incorrect']  = "please fill all entres";
header("Location: addDevice.php?");     
}

else 
if (empty($deviseName))
{
$_SESSION['incorrect']  = "Enter Device Name ";
header("Location: addDevice.php?");     
} 

else
if(empty($Description))
{
$_SESSION['incorrect']  = "Enter Devise Description";
header("Location: addDevice.php?");  
}
else
{
//no image
if (empty($_FILES["image"]["name"]))
{ 
{
$_SESSION['incorrect']  = "Add device photo";
header("Location: addDevice.php?");  
}
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
$query="INSERT INTO device (device_name, description,photo) VALUES('$deviseName','$Description','$imgContent')";
$result = mysqli_query($connection, $query);
}

}
}

if($result)
{
$deviceID = mysqli_insert_id($connection);
header('Location: DevicesPage.php?$deviceID='.$deviceID);
}
//end
?>
</body>
</html>