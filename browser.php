<?php
$txtAddress = $_GET['txtAddress'];
$txtCell = $_GET['txtCell'];
$txtRoom = $_GET['txtRoom'];

// Database connection code
$conn = new mysqli('localhost', 'root', '','propfinder');

if($conn->connect_error){
    die("Failed to Connect : ".$conn->connect_error);
}else {
    $stmt = $conn->prepare("select * from owner_register where fldEmail = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
    }
}