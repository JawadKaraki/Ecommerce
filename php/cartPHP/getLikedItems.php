<?php

//get in liked
if(isset($_SESSION['productid'])){
    $productid = $_SESSION['productid'];
    $customerid = $_SESSION['id'];
    $query = "SELECT products.productid,products.productname,products.img1,products.price FROM liked INNER JOIN products ON liked.productid = products.productid WHERE liked.customerid = '$customerid';";
    $result3 = mysqli_query($conn,$query);
    if($result3 && mysqli_num_rows($result3) > 0){
	   for($i = 0;$cart_i = mysqli_fetch_assoc($result3);$i++){
           $productidliked[$i] = $cart_i['productid'];
		   $name2[$i] = $cart_i['productname'];
           $size2[$i] = $cart_i['size'];
           $img2[$i] = $cart_i['img1'];
           $price2[$i] = $cart_i['price'];
		}
    }else{
        $name2[0] = "NO PRODUCTS IN WISH LIST";
        $img2[0] = "logo.png";
        $price2[0] = 0;
    }
}
?>