<!DOCTYPE html>
    <head>
        <title>Update user page</title>
    </head>

<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM userprofile WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in updateUser.php");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
$contactNum = $row['contactNum'];

//@mysql_free_result($result);
?>

<html>
    <head>
        <title>template</title>
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
		<form method="post" action="updateDb.php">
Name:
<input type ="text" name="name" size="40" value="<?php echo $name; ?>">
<br>
<br>
Email:
<input type ="text" name="email" size="25" value="<?php echo $email; ?>">
<br>
<br>
Address :
<input type ="text" name="address" size="75" value="<?php echo $address; ?>">
<br>
<br>
Contact Number :
<input type ="number" name="contactNum" size="13" value="<?php echo $contactNum; ?>">
<br>
<br>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<input type ="submit" value="Update">
<input type ="reset" value="Reset">
<br>
</form>
<hr>
<div align="centre">[ <a href="viewUser.php"]>View</a> |
<a href="homepage_admin.php">Homepage</a> |
<a href="createUser.php">Add</a> ] </div>

</div>         

    </body>
</html>