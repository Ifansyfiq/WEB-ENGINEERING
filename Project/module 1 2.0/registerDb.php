<!-- registerDb.php -->
<!-- To insert data of signup.php into database. -->
<?php      
    include_once('dbase.php');  
	
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);		
      
        
$sql = "INSERT INTO user (username, password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
header ("Location: login.php?register=success");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>