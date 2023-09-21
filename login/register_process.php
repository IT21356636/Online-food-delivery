<?php
include 'config.php';

?>

<?php
    $name =$_POST['user_name'];
    $address =$_POST['address'];
    $email=$_POST['email'];
    $password =$_POST['password'];
   


    $query = "INSERT INTO register(`user_name`,`address`,`email`,`password`)
    VALUES('$name','$address','$email','$password')";

    if($conn->query($query)===TRUE){
        echo "New record added";
         }else{
             echo "Error inserting records:".$conn->error;
         }
?>