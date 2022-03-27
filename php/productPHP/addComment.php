<?php

//insert comment to database

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cmnt = $_POST['cm'];
    $cstmrid = $_SESSION['id'];
    $prdctid = $_SESSION['productid'];
    if(!empty($cmnt)){
        //save to database
        $query = "INSERT INTO comments (customerid,comment,productid) VALUES ('$cstmrid','$cmnt','$prdctid'); ";
        mysqli_query($conn,$query);
    }
    header("location: product.php?prdct=".$_SESSION['productid']);
    }
?>