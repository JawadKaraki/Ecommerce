<?php
//add to liked products in the cart page
if(isset($_POST['liked'])){
    $likedprdct = $_SESSION['productid'];
	$likedcstmr = $_SESSION['id'];

	$query = "select * from liked where productid = '$likedprdct' AND customerid = '$likedcstmr' limit 1;";
    $result3 = mysqli_query($conn,$query);
	if(mysqli_num_rows($result3) == 0){
    $query = "INSERT INTO liked (customerid,productid) VALUES ('$likedcstmr','$likedprdct');";
    $result3 = mysqli_query($conn,$query);
    }
}
?>