<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "robot_db");

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT * FROM pose";
$result = $conn->query($sql);

$poses = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $poses[] = [
            "id" => $row['id'],
            "motor1" => $row['servo1'],
            "motor2" => $row['servo2'],
            "motor3" => $row['servo3'],
            "motor4" => $row['servo4'],
        ];
    }
}

echo json_encode($poses);
$conn->close();
?>
