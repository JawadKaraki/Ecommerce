<?php
//all products show
$query = "SELECT productid,img1, productname, price
FROM products
;";
$result3 = mysqli_query($conn,$query);
if($result3 && mysqli_num_rows($result3) > 0){
   for($i = 0;$rows = mysqli_fetch_assoc($result3);$i++){
	   $productidall[$i] = $rows['productid'];
	   $nameall[$i] = $rows['productname'];
	   $imgall[$i] = $rows['img1'];
	   $priceall[$i] = $rows['price'];
	}
}
?>