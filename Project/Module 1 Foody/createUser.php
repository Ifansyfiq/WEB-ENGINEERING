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
        <div class="center">
         <!--   <h1>Create user</h1>
            <input type="text" name="name" id="name" placeholder="fullname"><br><br>
            <input type="text" name="address" id="address" placeholder="address"><br><br>
            <input type="email" name="email" id="email" placeholder="email"><br><br>
            <input type="number" name="contactNum" id="contactNum" placeholder="contact number"><br><br>
            <input type="submit" name="create">
       --> 
       <form method="post" action="insertCreate.php">
        Nama :
        <input type="text" name="nama" size="40">
        <br>
        Email:
        <input type="text" name="email" size="25">
        <br>
        Catatan : <br>
        <textarea name="komen" cols="30" rows="8"></textarea>
        <br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
        <br>
        </form>
        </div>
    </body>
</html>