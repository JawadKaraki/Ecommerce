<?php

//product check
if(isset($_SESSION['productid'])){
    $productid = $_SESSION['productid'];
    $query = "select * from products where productid = '$productid' limit 1";
    $result2 = mysqli_query($conn,$query);
    if($result2 && mysqli_num_rows($result2) > 0){
       $productdata = mysqli_fetch_assoc($result2);
    }
}

?>