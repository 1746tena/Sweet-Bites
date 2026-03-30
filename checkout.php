<?php
include "db.php";

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$cart=$_POST['cart'];

$conn->query("INSERT INTO orders(name,email,address,cart)
VALUES('$name','$email','$address','$cart')");
?>