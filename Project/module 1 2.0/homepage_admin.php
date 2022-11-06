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
<table width="379" height="286" border="3" bordercolor="#666666">
  <tr>
    <td height="190" bgcolor="#999999"><p align="center" class="style1"><strog>User Profile</strong></p>
      <div align="center">
        <span class="style3">Date : <?php echo date("d-m-Y"); ?></span>
      </div>
      	<p align="center" class="style1"></p>
 	<div align="center">
          <span class="style3">Time : <?php echo date("H:i", time()); ?></span>
      	</div>
	<p align="center" class="style1">
	  [<a href="createUser.php">Create</a> | <a href="viewUser.php">View</a>| <a href="searchUser.php">Search</a>]
	</p>
  </tr>
</table>
<p class="style1">&nbsp;</p>
</div>
            

    </body>
</html>