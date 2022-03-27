<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location: login.php");
}
include("php/connection.php");
include("php/functions.php");
include("php/menPHP/getAllProducts.php");
include("php/menPHP/checkMostPurchased.php");
include("php/menPHP/checkNewArrivals.php");

?>

<html lang="en">
	<head>
		<title>MEN</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/men.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Major+Mono+Display&display=swap" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="StyleSheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	</head>
	<body>
		<div class="hidden-menu">
			    <a class="hid-menu-links" id='exit'><i class="fa fa-user"></i></a>
			    <a href="index.php" class="hid-menu-links">HOME</a>
				<a href="men.php" class="hid-menu-links">MEN</a>
				<a href="boys.php" class="hid-menu-links">BOYS</a>
				<a href="signup.php" class="hid-menu-links"><i class="fa fa-user"></i></a>
				<a href="cart.php" class="hid-menu-links"><i class="fa fa-shopping-cart"></i></a>
		 </div>
		<main>
		 
			<div id="section1">
				<div id="cover"></div>
			    <nav id="navbar">
					<img src="img/logo.png">
			       	<div class="menu">
						<a href="index.php" class="menu-links">HOME</a>
						<a href="men.php" class="menu-links">MEN</a>
						<a href="boys.php" class="menu-links">BOYS</a>
						<a href="signup.php" class="menu-links"><i class="fa fa-user"></i></a>
						<a href="cart.php" class="menu-links"><i class="fa fa-shopping-cart"></i></a>
						<button id='bars'><i class="fa fa-bars"></i></button>
					</div>
			    </nav>
				<div class="text">
					BUY BEST PRODUCTS FROM <br>
					ALL OF THE WORLD
				</div>
				<div class="small-text">
					sign up here for the best experience
				</div>
				<a href="signup.php"><button id="signup-btn">SIGN UP</button></a>
			</div>

			<div id="section2">
				<p class="quote">OUR NEWEST PRODUCTS</p>
				<div class="products">
					<?php
					for($i = 0;$i < count($name);$i++){
						echo "<a href='product.php?prdct=".$productid0[$i]."'>";
						echo "<div class='product'>";
						echo "<div class='buttons'>";
						echo "<button class='cart'><i class='fa fa-shopping-cart'></i></button><button class='heart'><i class='fa fa-heart'></i></button></div>";
						echo "<div class='img-cont'><img src='img/".$img[$i]."'></div><div class='data-container'>";
						echo "<a href='product.php'>".$name[$i]."</a>";
						echo "<div class='price'><p>".$price[$i]."$</p></div>";
						echo "</div></div></a>";
					}
					?>
				</div>
				<p class="quote">MOST PURCHASED COLLECTION</p>
				<form class="products" method="post">
				<?php
					for($i = 0;$i < count($name2);$i++){
						echo "<a href='product.php?prdct=".$productid[$i]."'>";
						echo "<div class='product'>";
						echo "<div class='buttons'>";
						echo "<button class='cart'><i class='fa fa-shopping-cart'></i></button><button class='heart'><i class='fa fa-heart'></i></button></div>";
						echo "<div class='img-cont'><img src='img/".$img2[$i]."'></div><div class='data-container'>";
						echo "<a href='product.php'>".$name2[$i]."</a>";
						echo "<div class='price'><p>".$price2[$i]."$</p></div>";
						echo "</div></div></a>";
					}
				?>
				</form>
				<p class="quote">ALL PRODUCTS</p>
				<form class="products" method="post">
				<?php
					for($i = 0;$i < count($name2);$i++){
						echo "<a href='product.php?prdct=".$productidall[$i]."'>";
						echo "<div class='product'>";
						echo "<div class='buttons'>";
						echo "<button class='cart'><i class='fa fa-shopping-cart'></i></button><button class='heart'><i class='fa fa-heart'></i></button></div>";
						echo "<div class='img-cont'><img src='img/".$imgall[$i]."'></div><div class='data-container'>";
						echo "<a href='product.php'>".$nameall[$i]."</a>";
						echo "<div class='price'><p>".$priceall[$i]."$</p></div>";
						echo "</div></div></a>";
					}
				?>
				</form>
			</div>
			
		</main>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js/men.js"></script>
	</body>
</html>