<!--updateUser.php-->
<!--To update data of updateUser.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);


$query = "UPDATE book SET nama = '$nama', email = '$email', komen = '$komen' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updateUser.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='viewUser.php' </script>";
}
?>