<!-- delete.php -->
<!-- To delete one particular data. -->

<?php

include ("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM userprofile WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in viewUser.php");

if($result){
echo "<script type= 'text/javascript'> window.location='viewUser.php'</script>";
}
?>