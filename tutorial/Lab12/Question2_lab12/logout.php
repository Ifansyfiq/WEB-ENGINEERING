<!-- Log out page -->
<?php
include ('dbase.php');

unset($_SESSION['id']);
echo "<script language=javascript>alert('Successfully Logout.');window.location='loginForm.php';</script>";
?>
