<!DOCTYPE html>

<html>
    <head>
        <title>create user page</title>
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
        <div class="center">
            <h1>Create User Profile</h1>
            <form method="post" action="insertDb.php">
            Name :
            <input type="text" name="name" size="40">
            <br>
            <br>
            Email :
            <input type="text" name="email" size="25">
            <br>
            <br>
            Address :
            <input type="text" name="address" size="75">
            <br>
            <br>
            Contact Number :
            <input type="number" name="contactNum" size="13">
            <br>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            <br>
            </form>
            <hr>
            <div align="center">[ <a href="viewUser.php">View</a> | 
            <a href="homepage_admin.php">Homepage</a ] </div>
        </div>
    </body>
</html>