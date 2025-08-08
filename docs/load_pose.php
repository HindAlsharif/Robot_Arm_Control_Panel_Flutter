<?php
$conn = new mysqli("localhost", "root", "", "robot_db");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM pose WHERE id = $id");

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode([]);
}
$conn->close();
?>
