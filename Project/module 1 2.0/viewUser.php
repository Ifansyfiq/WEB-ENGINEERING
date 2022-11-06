<!DOCTYPE html>

<html>
    <head>
        <title>view user page</title>
        <style>
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
        
    </header>
    <body bgcolor="#FFFFFF" text="#000000">
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
        <!-- content of view user --> 
        <div class="center"> 
		<ol>
<?php
include("dbase.php");

$query = "SELECT * FROM userprofile";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
	$name = $row["name"];
	$email = $row["email"];
	$date = $row["date"];
	$time = $row["time"];
    $address = $row["address"];
    $contactNum = $row["contactNum"];
	?>
	<li>
	Name : <?php echo $name; ?><br>
	Email : <?php echo $email; ?><br>
	Date / Time : <?php echo "$date / $time"; ?><br>
    Address : <?php echo $address; ?><br>
    Contact Number : <?php echo $contactNum; ?><br>
	Action : <a href="updateUser.php?id=<?php echo $id; ?>">Update</a> /  <a href="deleteUser.php?id=<?php echo $id; ?>">Delete</a><br>
    </li>
	<?php
    }
} else {
    echo "0 results";

}
?>
</ol>
<div align="center">[ <a href="homepage_admin.php">Homepage</a> |
<a href="createUser.php">Add</a> ] </div>

</div>         

    </body>
</html>