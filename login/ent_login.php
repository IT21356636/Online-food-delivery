<?php
session_start();
include 'config.php';

$un=($_POST['user_name'])?$_POST['user_name']:"";
$pw=($_POST['password'])?$_POST['password']:"";


$query="SELECT * FROM register WHERE user_name='$un' AND password='$pw' ";


//echo $un." ".$pw;

if(($un!=""&&$pw!="")||($un!=null&&$pw!=null)) {

    
    $result=$conn->query($query);

    if($result->num_rows>0){

        if($row=$result->fetch_assoc()){

            // setcookie("user",$row['first_name']);
            // setcookie("userID",$row['user_id']);


            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['register_id']=$row['register_id'];

            header('Location:home.php');




        }



    }
    else{

        echo 'invalid username or password';


    }



}
else{
    echo 'cannot empty';
}



?>