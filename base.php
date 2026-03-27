<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "water_order";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$address_link = $_POST['address_link'];


$sql = "INSERT INTO orders (name, phone, quantity, address, address_link)
VALUES ('$name', '$phone', '$quantity', '$address', '$address_link')";

if ($conn->query($sql) === TRUE) {
    echo "Order submitted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
