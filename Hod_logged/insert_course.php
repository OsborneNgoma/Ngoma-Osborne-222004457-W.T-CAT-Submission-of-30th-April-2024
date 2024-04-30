<?php
include '../db_connection.php';

// Get form data
$course_name = $_POST['course_name'];
$credits = $_POST['credits'];

// Prepare SQL statement
$sql = "INSERT INTO courses (course_name, credits) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $course_name, $credits);

// Execute SQL statement
if ($stmt->execute()) {
    echo "<script>alert('Course inserted successfully!')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
