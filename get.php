<?php
include "db.php";
$result = $conn->query("SELECT * FROM cart");
$cart = [];
while($row = $result->fetch_assoc()){
    $cart[] = $row;
}
echo json_encode($cart);
$conn->close();
?>