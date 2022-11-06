<html>
<body>
<?php

$cookie_name = "username";
$cookie_value = "Welcome guest";

// Setting the cookie
setcookie($cookie_name, $cookie_value, time()+120); 

// Check if the cookie is set
 
if(!isset($_COOKIE[$cookie_name])) {
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
 echo "Cookie '" .$cookie_name. "' is set!<br>";
  //retrieve the cookie value
 }
?>




</body>
</html>