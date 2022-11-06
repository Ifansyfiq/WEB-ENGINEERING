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
    </header>
    <body>
    <div id = "frm">  
       <center>  
	   <h3>Enter Login Details</h3>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
		 <br><br>
                <label> Username: </label>  
                <input type = "text" id ="user_name" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
           
		   <p>     
                <input type =  "submit" id = "btn" value = "Submit" />  

            </p>
            <p>     
                <input type =  "reset"  value = "Reset" />  

            </p>
            <p>
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
                        alert("Invalid username and password");  
                        return false;     
                }                             
            }  
        </script> 

    </body>
</html>