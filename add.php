<?php
include "db.php";
$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$price = $data['price'];
$quantity = $data['quantity'];

$stmt = $conn->prepare("INSERT INTO cart (product_name, price, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $name, $price, $quantity);
$stmt->execute();
$stmt->close();
$conn->close();

echo json_encode(["status"=>"success"]);
?>