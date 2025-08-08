<?php
$conn = new mysqli("localhost", "root", "", "robot_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM run WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["status"] . ",s" . $row["servo1"] . ",s" . $row["servo2"] . ",s" . $row["servo3"] . ",s" . $row["servo4"];
} else {
    echo "No data found";
}

$conn->close();
?>
