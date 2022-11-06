<html>
    <head>
        <!-- To authenticate login.php scripting and database.-->
        <title>authentication page</title>
    </head>
<?php      
    include_once('dbase.php');  
	
    $username = $_POST['user_name'];  
    $password = $_POST['password'];   
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);    
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);
		$password = mysqli_real_escape_string($conn, $password); 		
      
        $sql_login_staff = "SELECT * FROM user WHERE user_name = '$username' and password = '$password'  ";  
		$sql_login_staff1 = "SELECT * FROM user WHERE user_name = '$username' and password = '$password' "; 
		$sql_login_staff2 = "SELECT * FROM user WHERE user_name = '$username' and password = '$password' "; 
		$sql_login_staff3 = "SELECT * FROM user WHERE user_name = '$username' and password = '$password' ";
		
        if($result_login_staff = $conn->query($sql_login_staff))
    {
        $rows_login_staff = $result_login_staff->fetch_array();
        if($total_login_staff = $result_login_staff->num_rows)
        {
            $_SESSION['id'] = $rows_login_staff['id'];
            header('Location:welcomeUser.php');
      
        }
        else
        {
            echo "Login failed";

        }
}
?>  
</html>