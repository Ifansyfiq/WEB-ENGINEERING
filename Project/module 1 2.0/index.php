<!DOCTYPE html>

<html>
    <head>
        <title>index (first system page)</title>
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
            #frm{  
            border: solid gray 1px;  
             width:25%;  
             border-radius: 2px;  
             margin: 120px auto;  
             background: white;  
            padding: 50px;  
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
    <div id = "frm">  
       <center> <h1>Module</h1>  
             <table>
             <tr>
                 <td><a href="login.php">Module 1</a></td>
                 <td>Module for Administrator (Manage User)</td>
             </tr>
             <tr>
                 <td><a href="index.php">Module 2</a></td>
                 <td>Restaurant Owner</td>
             </tr>
             <tr>
                 <td><a href="index.php">Module 3</a></td>
                 <td>General User</td>
             </tr>
             <tr>
                 <td><a href="index.php">Module 4</a></td>
                 <td>Rider</td>
             </tr>
             <tr>
                 <td><a href="index.php">Module 5</a></td>
                 <td>Complaint Module</td>
             </tr>
            </table>
    </div>  </center>

    </body>
</html>