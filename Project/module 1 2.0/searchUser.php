<!DOCTYPE html>

<html>
    <head>
        <title>Homepage Admin</title>
        <style>
        
        .style1 {font-family: Verdana, Arial, Helvetica, sans-serif}

        .style3
        {font-familly:Verdana, Arial, Helvetica, sans-serif;
          font-siize: 12px;
            font-weight: bold;
        }
            body
            {
                background-color: #54E1E1;
            }
            header {
                background-color: #3B9C9C;
            }

            .sidenav
            {
                height: 100%;
                width: 250px;
                position: fixed;
                background-color: #A8DBD6;
                text-align: center;
            }
            td
            {
                border-radius: 10px;
                background-color: #FFFBF0;
            }
            .center
            {
                margin:auto;
                width: 200px;
                padding: 10px;
            }
        </style>
    </head>
    <header>
        <table>
            <tr>
            <td>
            <img src="images/umplogo.png" width="80" height="100" style="padding: 10px;"> 
            </td>
            <td>
            <h1 style="padding: 12px;" >FOODY</h1>
            </td>
        </table>
        <a href="logout.php" style="float:right">Log out</a>
        </header>
    <body>
        <div class="sidenav center">
                <table>
                    <tr>
                        <th><img src="images/adminlogo.png" width="150" height="150"></th>
                    </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="homepage_admin.php">Homepage</a> </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="QRcodeAdmin.php">QR code</a> </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><a href="report.php">Report</a></td>
                </tr>
            </table>
        </div>
        <?php
// set the default time zone to use in Malaysia
date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<div align="center">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="searchName">
  <input type="submit">
</form>

<?php
        include("dbase.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nameSearch = htmlspecialchars($_REQUEST['searchName']);
        }
       
        $query_pekan = "SELECT * FROM userprofile WHERE name like '$nameSearch'";
        $result_pekan = mysqli_query($conn,$query_pekan);
        $total_pekan = 0;
        
        if (mysqli_num_rows($result_pekan) > 0){
            while($row = mysqli_fetch_assoc($result_pekan)){
                $id = $row["id"];
                $nama = $row["name"];
                $email = $row["email"];
                $address = $row["address"];
                $contactNum = $row["contactNum"];
            }
        } else {
            echo "0 results";
        
        }


?>

    Nama : <?php echo $nama; ?><br>
	Email : <?php echo $email; ?><br>
    Address : <?php echo $address; ?><br>
	Contact Number : <?php echo $contactNum; ?><br>

</div>
            

    </body>
</html>