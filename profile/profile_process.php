<?php 
include 'config_profile.php';
?>


<?php
$name=$_POST['user_name']; 
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['addrses'];

$query ="INSERT INTO profile (`user_name`,`email`,`number`,`address`)
VALUES('$name','$email','$number','$address')";  

 if($conn->query($query)===TRUE){
        echo "New record added";
         }else{
             echo "Error inserting records:".$conn->error;
         }
?>
