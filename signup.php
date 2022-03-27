<?php
session_start();

include("php/connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $number = $_POST['number'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($name) && !empty($pass) && !empty($email) && !empty($number) && !empty($city) && !empty($address)){
        //save to database
        $query = "INSERT INTO customers (username,email,password,city,address,number) VALUES ('$name','$email','$pass','$city','$address','$number'); ";
        mysqli_query($conn,$query);
        header("location: login.php");
        die;
    }else{
        echo "please enter some valid info";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <h1 class="header">CREATE ACCOUNT</h1>
        <p id="error">INVALID EMAIL</p>
        <form action="" class="form" name="myform" onsubmit="return isEmail() && isnum()" method="post">
            <div class="account">
               <input name="name" type="text" placeholder="YOUR NAME" required> 
            </div>
            <div class="account">
                <input name="email" type="text" placeholder="YOUR EMAIL" required>
            </div>
            <div class="account">
                <input name="password" type="text" placeholder="YOUR PASSWORD" id = "password" required>
            </div>
            <div class="address">
              <div class="account">
                <input name="city" type="text" placeholder="YOUR CITY" required>
              </div>
              <div class="account">
                <input name="address" type="text" placeholder="YOUR ADDRESS" required>
              </div>
            </div>
            <div class="account">
                <input name="number" type="text" placeholder="YOUR NUMBER" required>
            </div>
            <input name="submit" type="submit" value="submit" id="submit">
        </form>
        <p class="question">you already have an account??  </p>
        <a href="login.php" class="login">LOGIN HERE</a><br><br><hr>
        <a href="php/logout.php" class="login">LOGOUT</a>
    </div>
<script src="js/signup.js"></script>
</body>
</html>