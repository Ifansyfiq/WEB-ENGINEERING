<!DOCTYPE html>

<html>
    <head>
        <title>Login page</title>
        <style>
            body
            {
                background-color: #54E1E1;
            }
            header {
                background-color: #3B9C9C;
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
    #btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
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
        <a href="index.php" style="float:right">out</a>
    </header>
    <body>
    <div id = "frm">  
       <center> <h1>UMP Food Delivery System </h1>  
	   <h3>Login</h3>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
			
			 <label for="usertype">Select User:</label>
         <select name="usertype" id="usertype">
           <option value="admin">Administrator</option>
           <option value="Ro">Restaurant owner</option>
           <option value="GU">General User</option>
           <option value="rider">Rider</option>
         </select>
		 <br><br>
                <label> Username: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
           
		   <p>     
                <input type =  "submit" id = "btn" value = "Login" />  

            </p>
            <p>
            <center>
                <h4>Doesn't have account? <a href="signup.php">sign up</a></h4>
            </center>
             </p>  
        </form>  
    </div>  </center>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 

    </body>
</html>