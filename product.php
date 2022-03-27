<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location: login.php");
}
$_SESSION['productid'] = $_GET['prdct'];
$p = $_GET['prdct'];

include("php/connection.php");
include("php/functions.php");
include("php/productPHP/getUserInfo.php");
include("php/productPHP/getProductData.php");
include("php/productPHP/addToCart.php");
include("php/productPHP/addToLiked.php");
include("php/productPHP/getComments.php");
include("php/productPHP/addComment.php");
include("php/productPHP/RelatedProducts.php");


?>
<html lang="en">
	<head>
		<title>PRODUCT</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/product.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="path/to/lightbox.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Major+Mono+Display&display=swap" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="StyleSheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	</head>
	<body>
		<main>

			<div id="section1">
				<div id="cover"></div>
			    <nav id="navbar">
					<img src="img/logo.png">
			       	<div class="menu">
						<a href="HOME-PAGE.php" class="menu-links">HOME</a>
						<a href="men.php" class="menu-links">MEN</a>
						<a href="boys.php" class="menu-links">boys</a>
						<a href="signup.php" class="menu-links"><i class="fa fa-user"></i></a>
						<a href="cart.php" class="menu-links"><i class="fa fa-shopping-cart"></i></a>
						<button><i class="fa fa-bars"></i></button>
					</div>
			    </nav>
                <div class="product-info">
                    <div class="left">
					<div class="big-img"><img src="img/<?php echo $productdata['img1']; ?>"></div>
					   <div class="small-img">
						   <img src="img/<?php echo $productdata['img1']; ?>">
					       <img src="img/<?php echo $productdata['img2']; ?>">
					       <img src="img/<?php echo $productdata['img3']; ?>">
					   </div>
                    </div>
                    <div class="right">
                        <p class="product-name"><?php echo $productdata["productname"]; ?></p>
                        <p class="price"><?php echo $productdata['price']."$"; ?></p>
						<form method="post" class="buttons">
                            <button class="cart" name = "cart">ADD TO CART</button>
                            <button class="buy" name = "buy">BUY IT NOW</button>
							<button class="cart-icon" name = "cart"><i class="fa fa-shopping-cart"></i></button>
                            <button class="buy-icon" name = "buy"><i class="fa fa-credit-card"></i></button>
                            <button class="love" name = "liked"><i class="fa fa-heart"></i></button>
						</form>
                        
						<form class="size" method="post" action="">
						<label for="size" class="shipment">Choose a size:</label>
                        <select name="size" id="size">
                             <option value="XL">XL</option>
                             <option value="L">L</option>
                             <option value="M">M</option>
                             <option value="S">S</option>
                        </select>
						</form>

                        <p class="description">DESCRIPTION:<br>
                        <?php echo $productdata['description']; ?>
                        </p>
						<div class="comments">
							<p class = "reviews">
								REVIEWS
							</p>
							<div class="reviews-box">
							   
								<?php 
								   if(empty($comments)){
									   $comments[0] = "<p>THERE ARE NO COMMENTS</>";
								   }
								   for($i = 0;$i < count($comments);$i++){
									   echo "<div class='review'><p>";
									   echo $comments[$i];
								       echo "</p></div>";
								   }
								?>
							</div>
							<form method = "post" class="comment-input" onload = "resetform();">
								<input type="text" name="cm" class="comment" id="comment" placeholder="PLEASE ENTER A COMMENT">
								
							</form>
						</div>
                    </div>
                </div>
			</div>
		    <div id="relsection2">
			    <p class="relquote">RELATED PRODUCTS</p>
				<div class="relproducts">
					<?php
					for($i = 0;$i < count($name);$i++){
						echo "<a href='product.php?prdct=".$productid0[$i]."'>";
						echo "<div class='relproduct'>";
						echo "<div class='relbuttons'>";
						echo "<button class='relcart'><i class='fa fa-shopping-cart'></i></button><button class='relheart'><i class='fa fa-heart'></i></button></div>";
						echo "<div class='relimg-cont'><img src='img/".$img[$i]."'></div><div class='reldata-container'>";
						echo "<a href='product.php'>".$name[$i]."</a>";
						echo "<div class='relprice'><p>".$price[$i]."$</p></div>";
						echo "</div></div></a>";
					}
					?>
			    </div>
		    </div>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="lightbox2/src/js/lightbox.js"></script>
	<script src="js/product.js"></script>
	</body>
</html>