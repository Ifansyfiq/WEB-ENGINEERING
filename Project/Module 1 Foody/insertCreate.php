<!-- insertCreate.php -->
<!-- To insert data of createUser.php into database. -->
<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$query = "INSERT INTO book (nama,email,komen) VALUES('$nama','$email','$komen')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='viewUser.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>