<!--updateDb.php-->
<!--To update data of updateUser.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);

//Get date and time entry
$date = date("d-m-Y", time());
$time = date("H:i:s", time());

$query = "UPDATE userprofile SET name = '$name', email = '$email', date = '$date', time = '$time' , address = '$address', contactNum = '$contactNum' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updateUser.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewUser.php' </script>";
}
?>