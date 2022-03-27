<?php
//get new ARRIVALS AND STORE IN VARIABLES
$query = "SELECT productid,img1, productname, price
FROM products
WHERE agegroup = 'men'
ORDER BY date DESC
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
mysqli_free_result($result3);
?>