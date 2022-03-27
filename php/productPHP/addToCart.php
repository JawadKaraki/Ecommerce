<?php
//add to cart products in the cart page

//add to cart
if(isset($_POST['cart'])){
    $likedprdct = $_SESSION['productid'];
	$likedcstmr = $_SESSION['id'];
	$size = $_POST['size'];
	$query = "select * from cart where productid = '$likedprdct' AND customerid = '$likedcstmr' limit 1;";
    $result3 = mysqli_query($conn,$query);
	if(mysqli_num_rows($result3) == 0){
		$query = "INSERT INTO cart (customerid,productid,size) VALUES ('$likedcstmr','$likedprdct','XL');";
		$result3 = mysqli_query($conn,$query);
    }
}

?>