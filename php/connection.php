<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "clothes-shop";


if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
   die("failed to connect");
}

?>