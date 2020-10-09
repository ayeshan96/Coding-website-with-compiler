<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("Location:http://192.168.43.136:80/test/OpeningWindow.html"); //to redirect back to "index.php" after logging out
exit();
?>