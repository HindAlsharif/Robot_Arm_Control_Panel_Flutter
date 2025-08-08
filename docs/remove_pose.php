<?php
$conn = new mysqli("localhost", "root", "", "robot_db");
$id = $_GET['id'];
$conn->query("DELETE FROM pose WHERE id = $id");
$conn->close();
?>
