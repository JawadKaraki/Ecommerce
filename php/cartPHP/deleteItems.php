<?php
//delete from cart 
$pr = $_GET['checkcart'];
$cs = $_SESSION['id'];
if(isset($_GET['delete'])){
  foreach($pr as $checkcart){
    $r = $productidcart[$checkcart];
    $query = "DELETE FROM cart WHERE customerid = '$cs' AND productid = '$r';";
    mysqli_query($conn,$query);
  }
}
//delete from liked 
$pr = $_GET['checkliked'];
$cs = $_SESSION['id'];
if(isset($_GET['delete'])){
  foreach($pr as $checkliked){
    $r = $productidliked[$checkliked];
    $query = "DELETE FROM liked WHERE customerid = '$cs' AND productid = '$r';";
    mysqli_query($conn,$query);
  }
  header("location: cart.php");
}

?>