
<?php 
include 'config.php';
?>
<?php
$name=$_POST['c_name']; 
$email=$_POST['C_email'];
$gender=$_POST['gender'];
$description=$_POST['C_description'];

$query ="INSERT INTO contactus (`c_name`,`C_email`,`gender`,`C_description`)
VALUES('$name','$email','$gender','$description')";  

if($conn->query($query)===TRUE){
    echo  "New recorded addded";
    
    // header('location: '.BASEURL."?user_reg=success");
}
else {
    echo "Error inserting records:".$conn->error;
}
?>