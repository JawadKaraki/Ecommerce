<?php 
//most purchased boys products
$query = "SELECT productid,img1, productname, price
FROM products
WHERE agegroup = 'boys'
ORDER BY nbpurchased DESC
LIMIT 10
;";
$result3 = mysqli_query($conn,$query);
if($result3 && mysqli_num_rows($result3) > 0){
   for($i = 0;$rows = mysqli_fetch_assoc($result3);$i++){
	   $productid[$i] = $rows['productid'];
	   $name2[$i] = $rows['productname'];
	   $img2[$i] = $rows['img1'];
	   $price2[$i] = $rows['price'];
	   
	}
}
?>