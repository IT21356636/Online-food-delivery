<?php
include 'config.php';
?>

<?php
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email=$_POST['email'];
    $phone =$_POST['phoneNo'];
    $date =$_POST['date'];
    $feedback =$_POST['feedback'];
    $fquality=$_POST['food_quality'];

    $query = "INSERT INTO customer_feedback(`fname`,`lname`,`email`,`phoneNo`,`date`,`feedback`,`food_quality`)
    VALUES('$fname','$lname','$email','$phone','$date','$feedback','$fquality')";

    if($conn->query($query)===TRUE){
        echo "New record added";
         }else{
             echo "Error inserting records:".$conn->error;
         }
?>