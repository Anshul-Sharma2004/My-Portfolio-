<?php
session_start();
include '01_index.php';


setcookie("logged_in", "", time() - 3600, "/"); 


header("Location: http://localhost/portPhp/login.php");
exit();
?>

