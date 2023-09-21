<?php
include 'config.php';
?>

<?php
    $customer_name =$_POST['customer_name'];
    $phone_number =$_POST['phone_number'];
    $order=$_POST['order'];
    $qty =$_POST['qty'];
    $date =$_POST['date'];
    $address =$_POST['address'];
    $message=$_POST['message'];

$query ="INSERT INTO `orders` (`customer_name`, `phone_number`, `order`, `qty`, `date`, `address`, `message`) 
	   VALUES ('$customer_name', '$phone_number', '$order', '$qty', '$date', '$address', '$message')";   

    if($conn->query($query)===TRUE){
        echo "New record added";
         }else{
             echo "Error inserting records:".$conn->error;
         }
?>