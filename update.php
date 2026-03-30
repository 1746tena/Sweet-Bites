<?php
include "db.php";
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$quantity = $data['quantity'];

$stmt = $conn->prepare("UPDATE cart SET quantity=? WHERE id=?");
$stmt->bind_param("ii", $quantity, $id);
$stmt->execute();
$stmt->close();
$conn->close();

echo json_encode(["status"=>"success"]);
?>