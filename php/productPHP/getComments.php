<?php
//get Comments on this product
if(isset($_SESSION['productid'])){
    $productid = $_SESSION['productid'];
    $query = "select comment from comments where productid = '$productid';";
    $result3 = mysqli_query($conn,$query);
    if($result3 && mysqli_num_rows($result3) > 0){
	   for($i = 0;$comments_data = mysqli_fetch_assoc($result3);$i++){
		   $comments[$i] = $comments_data['comment'];
		}
    }
	mysqli_free_result($result3);
}
?>