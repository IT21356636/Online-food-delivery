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
    
<!-- header section -->

<header>

	<div class="logo">
	<a href="#home"><img src="images/logo.png" alt="Logo" width="130" height= "130" ></a>
	</div>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#special">special</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="order.php #order">order</a>
		<a href="about.php">about us</a>
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


<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search foods..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>HOT PIZZA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>FRIED CHICKEN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Today's Special</span>
                    <h3>HOT BURGER</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="order.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/offer3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->



<!-- special section starts  -->

<section class="special" id="special">

    <h3 class="sub-heading"> our special </h3>
    <h1 class="heading"> Popular foods </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/food1.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>Rice & Curry</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		
		
		
		<div class="box">
            <img src="images/food2.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>Biryani</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		
		
		
		
		<div class="box">
            <img src="images/food3.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>Kottu</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		
		
		
		
		
		
		<div class="box">
            <img src="images/food4.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>Hoppers</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		
		
		
		
		
		<div class="box">
            <img src="images/food5.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>String Hoppers</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		
		
		
		<div class="box">
            <img src="images/food6.jpg" alt="">
				<span class="price">Rs.250.00</span>
				
			<h3>Pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
            <a href="order.php" class="btn3">order now</a>
			<button class="btn4">Add-cart<i class=" fa fa-shopping-cart"></i></button>
        </div>
		

        

    </div>

</section>

<!-- special section ends -->




<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> our special </h3>
    <h1 class="heading"> delicious Menu </h1>

     <div class="box-container">

        <div class="box">
            <a href="burger.php"><img class="image" src="images/menu1.jpg" alt="burger"></a>
            <div class="content">
                <img src="images/icon1.png" alt="">
                <h3>Hot & Spicy burger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <a href="pizza.php"><img class="image" src="images/menu2.jpg" alt="pizza"></a>
            <div class="content">
                <img src="images/icon2.png" alt="">
                <h3>Hot & Spicy pizza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <a href="drinks.php"><img class="image" src="images/menu3.jpg" alt="drinks"></a>
            <div class="content">
                <img src="images/icon3.png" alt="">
                <h3>Soft drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <a href="ice.php"><img class="image" src="images/menu4.jpg" alt="ice cream"></a>
            <div class="content">
                <img src="images/icon4.png" alt="">
                <h3>Ice cream</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <a href="cake.php"><img class="image" src="images/menu5.jpg" alt="cakes"></a>
            <div class="content">
                <img src="images/icon5.png" alt="">
                <h3>Sweet cakes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <a href="rice.php"><img class="image" src="images/menu6.jpg" alt="rice"></a>
            <div class="content">
                <img src="images/icon6.png" alt="">
                <h3>rice and kottu</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>

    </div>

</section>

<!-- menu section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading">Team Review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profile1.jpg" alt="">
                    <div class="user-info">
                        <h3>Dilshan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profile2.jpeg" alt="">
                    <div class="user-info">
                        <h3>Harindu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profile3.jpeg" alt="">
                    <div class="user-info">
                        <h3>Kavindu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>
			
			<div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profile4.jpeg" alt="">
                    <div class="user-info">
                        <h3>Yasas</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>
			

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profile5.png" alt="">
                    <div class="user-info">
                        <h3>Asalya</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

        </div>

    </div>
    
</section>

<!-- review section ends -->




<!-- footer section starts  -->

<footer class="footer">
  	 <div class="foot">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Yummy Food</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 	
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<h2>SLIIT (Sri Lanka Institute of Information Technology)<h2>
					<h2>Address : Mihindu Mawatha, Kurunegala<h2>
					<h2>Telephone: 0377 204 204<h2>
					
  	 			</div>
  	 		</div>
			<div class="logo">
				<a href="index.php #home"><img src="images/logo.png" alt="Logo" width="130" height= "130" ></a>
			</div>
  	 	</div>
  	 </div>
  </footer>


<!-- footer section ends -->












<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>