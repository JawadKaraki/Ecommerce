<?php
session_start();

include("php/connection.php");
include("php/functions.php");
include("php/cartPHP/getCartItems.php");
include("php/cartPHP/getLikedItems.php");
include("php/cartPHP/deleteItems.php");


?>
<html lang="en">
	<head>
		<title>CART</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/cart.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Major+Mono+Display&display=swap" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="StyleSheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	</head>
	<body>
		<main>

		<form id="section1" method = "get">
				<div id="cover"></div>
			    <nav id="navbar">
					<img src="img/logo.png">
			       	<div class="menu">
						<a href="index.php" class="menu-links">HOME</a>
						<a href="men.php" class="menu-links">MEN</a>
						<a href="boys.php" class="menu-links">boys</a>
						<a href="signup.php" class="menu-links"><i class="fa fa-user"></i></a>
						<a href="cart.php" class="menu-links"><i class="fa fa-shopping-cart"></i></a>
						<button><i class="fa fa-bars"></i></button>
					</div>
			    </nav>
            <div class="product-info">
                <div class="left">
                    <div class="in-cart" method="get" action="">
                        <h1 class="header">IN CART:</h1>
                        <?php
                          for($i=0;$i < count($name);$i++){
                          echo "<div class='product'>";
                          echo  "<img src='img/".$img[$i]."'>";
                          echo  "<div class='product-info'>";
                          echo  "<p class='product-name'>".$name[$i]."</p>";
                          echo  "<p class='price'>".$price[$i]."$</p>";
                          echo  "<p class='size'>".$size[$i]."</p>";
                          echo  "</div>";
                          echo  "<input name='num[]' type='number' class='quantity' min='1' value='1'>";
                          echo  "<input name='checkcart[]' type='checkbox' class='select' value='".$i."'>";
                          echo  "</div>";
                          }
                        ?>
                    </div>
                    <div class="in-liked">
                        <h1 class="header">WISH LIST:</h1>
                        <?php
                        for($i=0;$i < count($name2);$i++){
                          echo "<div class='product'>";
                          echo  "<img src='img/".$img2[$i]."'>";
                          echo  "<div class='product-info'>";
                          echo  "<p class='product-name'>".$name2[$i]."</p>";
                          echo  "<p class='price'>".$price2[$i]."$</p>";
                          echo  "</div>";
                          echo  "<input name='num[]' type='number' class='quantity' min='1' value='1'>";
                          echo  "<input name='checkliked[]' type='checkbox' class='select' value='".$i."'>";
                          echo  "</div>";
                        }
                        ?>
                    </div>
                </div>
              </div>
              <div class="buttons">
                <h1 class="header">TOTAL:  <?php echo $total;?>$</h1>
                <button type="submit" class="delete" name="delete">DELETE</button>
                <button class="BUY">BUY</button>
              </div>
            </form>
            
            


	<script>
        for(var i=0;i< <?php echo count($price);?>;i++){
            var x[i] = document.getElementById( "quantity" + i).value;
             
        } 

    </script>
	</body>
</html>