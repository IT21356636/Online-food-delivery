<?php

session_start();

echo"<h1>HOME PAGE</h1>";


$user=isset($_SESSION['user_name'])?$_SESSION['user_name']:"guest";
$id=isset($_SESSION['register_id'])?$_SESSION['register_id']:"0";


echo "hello $user. your ID id $id";

if($id==0){

    header('Location:login.html');

}


?>

<html>
<head>
</head>
<body>
<button onclick="location='logout.php'">Log out</button>

</body>


</html>

