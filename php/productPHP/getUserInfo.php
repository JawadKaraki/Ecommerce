<?php
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = "select * from customers where id = '$id' limit 1";
    $result = mysqli_query($conn,$query);

    if($result && mysqli_num_rows($result) > 0){
       $user_data = mysqli_fetch_assoc($result);
    }
}else{
    header("location: login.php");
    die;
}
?>