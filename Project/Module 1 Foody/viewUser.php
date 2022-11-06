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
        <!-- content of view user --> 
        <?php
        include("dbase.php");
        
        $query = "SELECT * FROM book";
        $result = mysqli_query($conn,$query);
        
        if (mysqli_num_rows($result) > 0){
            // output data of each row
            while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $nama = $row["nama"];
            $email = $row["email"];
            $komen = $row["komen"];
            ?>
            <li>
            Nama : <?php echo $nama; ?><br>
            Email : <?php echo $email; ?><br>
            Catatan : <?php echo nl2br($komen); ?><br>
            Tindakan : <a href="changeUser.php?id=<?php echo $id; ?>">CHANGE</a> /  <a href="delete.php?id=<?php echo $id; ?>">DELETE</a><br>
            </li>
            <?php
            }
        } else {
            echo "0 results";
        
        }
        ?>
           

    </body>
</html>