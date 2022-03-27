<?php
session_start();
include("php/connection.php");

function clkcart($id,$prid){
    
        $query = "select * from cart where productid = '$likedprdct' AND customerid = '$likedcstmr' limit 1;";
        $result3 = mysqli_query($conn,$query);
        if(mysqli_num_rows($result3) == 0){
            $query = "INSERT INTO cart (customerid,productid,size) VALUES ('$id','$prid','XL');";
            $result3 = mysqli_query($conn,$query);
        }
}

?>