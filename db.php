<?php
$host = "localhost";
$user = "root"; // اسم مستخدم قاعدة البيانات
$pass = "";     // كلمة المرور
$db = "sweet_store"; // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>