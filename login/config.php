<?php

$servername="localhost";
$username="root";
$password="";
$database="yummy_food";


$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
echo "connect succesfully";



?>