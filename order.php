<? include "config.php"?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Food delivery and takeout</title>

		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<!-- font link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

		<!-- css file link  -->
		<link rel="stylesheet" href="css/style.css">

	</head>
<body>
    


	<!--header section start-->

<header>

			<div class="logo">
				<a href="index.php #home"><img src="images/logo.png" alt="Logo" width="130" height= "130" ></a>
			</div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php #special">special</a>  
        <a href="index.php #menu">menu</a>
        <a href="index.php #review">review</a>
        <a class="active" href="#order">order</a>
		<a href="about.php #about">about us</a>
		<a href="contact.php">contact us</a>
		<a href="feedback.php">Feedback</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
	
	<div class="container">
		
		<button class="btn2"><a href="login/login.php">Sign Up</a></button>
		
	</div>
	<div class="user"	
		<button><a href="profile/profile.php">User<i class='fas fa-user-alt'></i></a></button>
	</div>


		
</header>


<!-- search form  -->
	<form action="" id="search-form">
		<input type="search" placeholder="search foods..." name="" id="search-box">
		<label for="search-box" class="fas fa-search"></label>
		<i class="fas fa-times" id="close"></i>
	</form>
	
<!--header section end-->





<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading"> order now </h3>
    <h1 class="heading"> free and fast </h1>

    <form action="order_process.php" method="POST">

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name" name="customer_name" required="">
            </div>
            <div class="input">
                <span>Phone number</span>
                <input type="tel" placeholder="enter your number" name="phone_number" required="">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name" name="order" required="">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="test" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how musch</span>
                <input type="number" placeholder="how many orders" name="qty" required="">
            </div>
            <div class="input">
                <span>order date</span>
                <input type="date" name="date">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea >
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="order now" class="btn">

    </form>

</section>

<!-- order section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</head>