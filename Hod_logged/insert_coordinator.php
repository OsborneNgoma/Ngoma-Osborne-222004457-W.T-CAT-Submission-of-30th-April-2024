<?php
include '../db_connection.php';
// Get form data
$name = $_POST['coordinator_name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];


// Prepare SQL statement
$sql = "INSERT INTO coordinators (coordinator_name,sex,email,phone_number) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $sex, $email, $phone_number);

// Execute SQL statement
if ($stmt->execute()) {
    echo "<script>alert('coordinator inserted successfully!')</script>";
    // header('location: coordinator_insert_form.php');
    // exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
