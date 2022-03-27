<?php
//get in cart
if(isset($_SESSION['productid'])){
    $productid = $_SESSION['productid'];
    $customerid = $_SESSION['id'];
    $query = "SELECT cart.productid,cart.size,products.productname,products.img1,products.price FROM cart INNER JOIN products ON cart.productid = products.productid WHERE cart.customerid = '$customerid';";
    $result3 = mysqli_query($conn,$query);
    if($result3 && mysqli_num_rows($result3) > 0){
	   for($i = 0;$cart_i = mysqli_fetch_assoc($result3);$i++){
           $productidcart[$i] = $cart_i['productid'];
		   $name[$i] = $cart_i['productname'];
           $size[$i] = $cart_i['size'];
           $img[$i] = $cart_i['img1'];
           $price[$i] = $cart_i['price'];
		}
    }else{
        $name[0] = "NO PRODUCTS IN CART";
        $img[0] = "logo.png";
        $price[0] = 0;
    }
}
?>