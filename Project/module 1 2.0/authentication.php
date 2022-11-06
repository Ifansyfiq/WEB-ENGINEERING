<html>
    <head>
        <!-- To authenticate login.php scripting and database.-->
        <title>authentication page</title>
    </head>
<?php      
    include_once('dbase.php');  
	
    $username = $_POST['username'];  
    $password = $_POST['password'];  
	$usertype = $_POST['usertype'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
		$usertype = stripcslashes($usertype);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);
		$password = mysqli_real_escape_string($conn, $password); 		
      
        $sql_login_staff = "SELECT * FROM user WHERE username = '$username' and password = '$password' and usertype = 'admin'";  
		$sql_login_staff1 = "SELECT * FROM user WHERE username = '$username' and password = '$password' and usertype = 'RO'"; //restaurant owner
		$sql_login_staff2 = "SELECT * FROM user WHERE username = '$username' and password = '$password' and usertype = 'GU'"; //general user
		$sql_login_staff3 = "SELECT * FROM user WHERE username = '$username' and password = '$password' and usertype = 'rider'";
		
        if($result_login_staff = $conn->query($sql_login_staff))
    {
        $rows_login_staff = $result_login_staff->fetch_array();
        if($total_login_staff = $result_login_staff->num_rows)// go to admin page
        {


            $_SESSION['id'] = $rows_login_staff['id'];
            header('Location:homepage_admin.php');
      
        }
		
            if($result_login_staff = $conn->query($sql_login_staff1))
    {
        $rows_login_staff = $result_login_staff->fetch_array(); // go to RO page
        if($total_login_staff = $result_login_staff->num_rows)
        {
            

            $_SESSION['id'] = $rows_login_staff['id'];
            header('Location:owner/salarystaff.php');
      
        }
		
		if($result_login_staff = $conn->query($sql_login_staff2)) // go to GU page
    {
        $rows_login_staff = $result_login_staff->fetch_array();
        if($total_login_staff = $result_login_staff->num_rows)
        {
            

            $_SESSION['id'] = $rows_login_staff['id'];
            header('Location:owner/manpower/manpowerhome.php');
      
        }
		
		
        else
        {
            echo "Login failed";

        }
    }
}
	}
?>  
</html>