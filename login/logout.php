<?php
session_start();
setcookie("user","");
setcookie("userID","");


header('Location:login.php');



session_destroy();


?>