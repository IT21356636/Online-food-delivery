<!DOCTYPE html>
<html>

	<head>
		<title>Ice cream</title>
	       
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- css file link  -->
		<link rel="stylesheet"href="css/style.css">
		<!-- php file link  -->
		<?php include 'icefile.php';?>
			
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
        <a class="active" href="index.php #menu">menu</a>
        <a href="index.php #review">review</a>
        <a href="order.php #order">order</a>
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





<!-- menu section starts  -->

<section class="menu1" id="menu1">
	 <h1 class="heading1"><span>Yummy</span> Ice cream</h1>
	 <div class="box-container">
		 		 
        <?php
            $query = "select * from food where image like 'i%'";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="box">						
                        <form method="post" action="ice.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="ice">
								<div class="image">
                                <img src="images/<?php echo $row["image"];?>" width="190px" height="200px">
								</div>
								<div class="content">
								
									<div class="stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
				
                                
                               
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
								<h3><?php echo $row["name"];?></h3>
								<h2><label for="quantity">Quantity:<input type="number" name="quantity" class="form-control" value="1"></label></h2>
								<p><?php echo $row["description"];?></p>
																
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn" value="Add to cart">
								<span class="price"><?php echo $row["price"];?></span>

                            </div>
							</div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>
	</div>
</section>	
			
<!-- menu section end  -->


		
		
		

	
	
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
	
	
<!-- custom js file link  -->
<script src="js/script.js"></script>	
	
	
</body>
</html>