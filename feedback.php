<? include "config.php"?>

<html>
<head> 
	<title>Customer Feedback</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="css/feedback.css">
	
</head>


<body>

	<!-- header section -->
	
	
		<header>

			<div class="logo">
				<a href="index.php #home"><img src="images/logo.png" alt="Logo" width="130" height= "130" ></a>
			</div>

    <nav class="navbar">
        <a href="index.php #home">home</a>
        <a href="index.php #special">special</a>  
        <a href="index.php #menu">menu</a>
        <a href="index.php #review">review</a>
        <a href="order.php #order">order</a>
		<a href="about.php #about">about us</a>
		<a href="contact.php">contact us</a>
		<a class="active" href="feedback.php">Feedback</a>
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

	
<div class="head">
		<div class="wrap">
			<table>
				<form action="feedback_process.php" method="POST">
				<div class="heading">Customer Feedback </div>
					<tr>
						<td>
							<lable>
							</lable>

						</td>
					</tr>
					<div class="details"> 
					<tr>
						<td><lable>Full Name :</lable>
							<br/>
							<input type="text" placeholder="First Name" name="fname" required="" >
						</td>
						<td><lable></lable>
							<br/>
							<input type="text" placeholder="Last Name" name="lname" required="">
							<br/> <br/>
						</td>
					</tr>
					<tr>
						<td><lable>E-mail :</lable>
							<br/>
							<input type="email" placeholder="Email" name="email" required="">
							<br/> <br/>
						</td>
						<td><lable>Phone Number :</lable>
							<br/>
							<input type="text" placeholder="Enter Phone Number" name="phoneNo" required="">
						</td>
		
					</tr>
					
					<tr>
						<td>
							<lable>Visited Date :</lable>
							<br/>
							<input type="date" id="date" name="date" required="">
							<br/> <br/>
						
						</td>
					</tr>
					<tr>
						<td>
							<lable>Describe your feedback :</lable>
							<br/>
							<textarea id="feedback" placeholder="Give the Feedback" name ="feedback" rows="8" cols="60" required=""> </textarea>
							<br> <br/>
							
						</td>
					</tr>
					
				</div>	
					<tr>
						<td>
							<label>Food Quality :</label>
							<input type="radio" id="Excelent" name="food_quality" value="E">
							<label for="Excelent">Excelent</label>

							<input type="radio" id="Good" name="food_quality" value="G">
							<label for="Good">Good</label>

							<input type="radio" id="Average" name="food_quality" value="A">
							<label for="Average">Average</label>
							<br/>
							<br/>
						</td>
					</tr>
<br/>
					<tr>
						<td >
							<button type="submit" class="Regbtn"> Submit </button>
						</td>
					</tr>
				</form>
			</table>
		</div>
		 <br/>
		<br/> 


		
		<!--Star Rating-->
				
		<div class="star_rating">
			<h2 class="rating_heading">Star Rating</h2></div>
			<div style="text-align:center">
			<p><h3>How was our foods?</h3></p>
			<button class="star">&#9734;</button>
			<button class="star">&#9734;</button>
			<button class="star">&#9734;</button>
			<button class="star">&#9734;</button>
			<button class="star">&#9734;</button>
			<p class="current_rating"> 0 of 5</p>
			</div>
		
			<div class="imoji">
				<img src="Images/good.png">
				<img src="Images/good.png">
				<img src="Images/good.png">
				<img src="Images/good.png">
				<img src="Images/good.png">
				
			</div>	
		
</div>	






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





	
	<script src="feedback.js"></script>

<!--******************************************************************************** -->


<!--******************************************************************************** -->
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>


</html>