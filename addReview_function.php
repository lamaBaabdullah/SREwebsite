<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>addDevice_function</title>
</head>
<body>
<?php
include('connection.php');
$itemID =$_GET['Id'];
$itemType=$_GET['category'];
$review= $_POST['textarea'];
if (empty($review))
{
$_SESSION['incorrect']  = "Add review";
header("Location: addReview.php?");     
}
else if($itemType=="D")
{
$query="INSERT INTO devicereviews (device_id, review) VALUES('$itemID','$review')";
$result1 = mysqli_query($connection, $query);
}
else if($itemType=="P")
{
$query="INSERT INTO programreviews (program_id, review) VALUES('$itemID','$review')";
$result2 = mysqli_query($connection, $query);   
}

if($result1)
{
$reviewID = mysqli_insert_id($connection);
$checkSql = 'SELECT * FROM device WHERE id="'.$itemID.'"';
$checkQuery = mysqli_query($connection, $checkSql);
while($row = mysqli_fetch_assoc($checkQuery)){
$name = $row['device_name'];
header('Location: reviews.php?id='.$itemID.'&name='.$name);
}
}
if($result2)
{
$reviewID = mysqli_insert_id($connection);
$checkSql = 'SELECT * FROM program WHERE id="'.$itemID.'"';
$checkQuery = mysqli_query($connection, $checkSql);
while($row = mysqli_fetch_assoc($checkQuery)){
$name = $row['program_name'];
header('Location: reviews.php?id='.$itemID.'&name='.$name);
}
}
?>
</body>
</html>