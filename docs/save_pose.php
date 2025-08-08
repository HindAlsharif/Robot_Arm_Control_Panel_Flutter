<?php
$conn = new mysqli("localhost", "root", "", "robot_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$servo1 = $_POST["motor1"];
$servo2 = $_POST["motor2"];
$servo3 = $_POST["motor3"];
$servo4 = $_POST["motor4"];

$stmt = $conn->prepare("INSERT INTO pose (servo1, servo2, servo3, servo4) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiii", $servo1, $servo2, $servo3, $servo4);

if ($stmt->execute()) {
    echo "Pose saved successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
