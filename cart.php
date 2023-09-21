<!DOCTYPE html>
<html>

	<head>
		<title>Cart</title>
	       
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- css file link  -->
		<link rel="stylesheet"href="css/style.css">
		<!-- php file link  -->
		<?php include 'pizzafile.php';?>
		
		
			
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






<!--shoppping cart-->
	<div class="cart">
    <h1 class="heading1"> Shopping Cart </h1>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="15%">Price Details</th>
                <th width="15%">Total Price</th>
                <th width="17%">Remove Item</th>
				<th width="17%">Buy</th>
			
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
						<td><a href="order.php" class="btn3">order now</a></td>
						
						
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total  Rs.</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
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
	
	
<!-- custom js file link  -->
<script src="js/script.js"></script>	
	
	
</body>
</html>