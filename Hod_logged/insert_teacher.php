<?php
include '../db_connection.php';
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$specialization = $_POST['specialization'];

// Prepare SQL statement
$sql = "INSERT INTO teachers (Name, email, sex, specialization) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $sex, $specialization);

// Execute SQL statement
if ($stmt->execute()) {
    echo "<script>alert('Teacher inserted successfully!')</script>";
    // header('location: teacher_insert_form.php');
    // exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
