<?php
session_start();

include("php/connection.php");
 
if(isset($_SESSION['id'])){
    header("location: index.php");
}
  $email = $_POST['email'];
  $pass = $_POST['password'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($email) && !empty($pass)){
        $query = "SELECT * FROM customers where email = '$email' limit 1;";
        $result = mysqli_query($conn,$query);
        if($result){
            if(mysqli_num_rows($result) > 0){
                $userdata = mysqli_fetch_assoc($result);
                if($userdata['password'] == $pass ){
                   $_SESSION['id'] = $userdata['id'];
                   header("location: index.php");
                   die;
                }else{
                  echo "wrong pass";
                 }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container-login">
        <h1 class="header">LOGIN TO ACCOUNT</h1>
        <p id="error">INVALID EMAIL</p>
        <form action="" class="form" name="myform" onsubmit="return isEmail() && isnum()" method = "post">
            <div class="account">
                <input name="email" type="text" placeholder="YOUR EMAIL" required>
            </div>
            <div class="account">
                <input name="password" type="text" placeholder="YOUR PASSWORD" id = "password" required>
            </div>
            
            <input name="submit" type="submit" value="submit" id="submit">
        </form>
        <p class="question">you already have an account??  </p>
        <a href="signup.php" class="login">SIGNUP HERE</a><br><hr>
        <a href="php/logout.php" class="login">LOGOUT</a>
    </div>
<script src="js/signup.js"></script>
</body>
</html>