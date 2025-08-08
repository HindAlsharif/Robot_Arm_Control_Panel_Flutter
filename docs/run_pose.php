// run_pose.php (الجديد)
<?php
$conn = new mysqli("localhost", "root", "", "robot_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all required POST variables are set
if (isset($_POST['motor1']) && isset($_POST['motor2']) && isset($_POST['motor3']) && isset($_POST['motor4'])) {

    $servo1 = $_POST['motor1'];
    $servo2 = $_POST['motor2'];
    $servo3 = $_POST['motor3'];
    $servo4 = $_POST['motor4'];

    $update = "UPDATE run SET 
        servo1 = {$servo1}, 
        servo2 = {$servo2}, 
        servo3 = {$servo3}, 
        servo4 = {$servo4}, 
        status = 1 
        WHERE id = 1";

    if ($conn->query($update) === TRUE) {
        echo "Run pose updated successfully";
    } else {
        echo "Error updating run pose: " . $conn->error;
    }
} else {
    echo "Missing motor values in POST request.";
}

$conn->close();
?>