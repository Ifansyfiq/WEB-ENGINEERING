<!DOCTYPE html>

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
                    <td><a href="index.php">Homepage</a> </td>
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

        include ("dbase.php");
        
        $idURL = $_GET['id'];
        
        $query = "DELETE FROM book WHERE id = '$idURL'";
        $result = mysqli_query($conn,$query) or die ("Could not execute query in updateUser.php");
        
        if($result){
        echo "<script type= 'text/javascript'> window.location='viewUser.php'</script>";
        }
        ?>

    </body>
</html>