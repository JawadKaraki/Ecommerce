<?php
//get related products to this product
//first get product info
$query = "SELECT productname
FROM products
WHERE productid = '$p'
LIMIT 1
;";
$result3 = mysqli_query($conn,$query);
if($result3 && mysqli_num_rows($result3) > 0){
	$row = mysqli_fetch_assoc($result3);
	$nameofthis = $row['productname'];
}
//split the name to two after space
$sub = explode(' ',$nameofthis);
//get related products that has the same words in its name
$query = "SELECT productid,img1, productname, price
FROM products
WHERE productname LIKE '%$sub[0]%' OR productname LIKE '%$sub[1]%'
LIMIT 10
;";
$result3 = mysqli_query($conn,$query);
if($result3 && mysqli_num_rows($result3) > 0){
   for($i = 0;$rows = mysqli_fetch_assoc($result3);$i++){
	   $productid0[$i] = $rows['productid'];
	   $name[$i] = $rows['productname'];
	   $img[$i] = $rows['img1'];
	   $price[$i] = $rows['price'];
	}
}
?>