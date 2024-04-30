<?php
// Include the database connection file
include 'db_connection.php';

// Get form data
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

// Establish database connection
$conn = connectDB();

// Check if email already exists
$emailCheckQuery = "SELECT * FROM classrepresentatives WHERE email='$email'";
$result = $conn->query($emailCheckQuery);
if ($result->num_rows > 0) {
    echo "Error: Email is already registered";
    exit();
} else {
    // Check if username already exists
    $usernameCheckQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($usernameCheckQuery);
    if ($result->num_rows > 0) {
        echo "Error: Username is already taken";
        exit();
    } else {
        // Insert data into classrepresentatives table
        $sql = "INSERT INTO classrepresentatives (first_name, last_name, email) VALUES ('$firstName', '$lastName', '$email')";
        if ($conn->query($sql) === TRUE) {
            // Retrieve the generated ID
            $rep_id = $conn->insert_id;

            // Insert data into users table
            $sql = "INSERT INTO users (username, password, user_type, user_reference_id) VALUES ('$username', '$password', 'representative','$rep_id')";
            if ($conn->query($sql) === TRUE) {
                // Close the database connection
                $conn->close();
                
                // Show success message and redirect after a delay
                echo "<script>
                        setTimeout(function() {
                            alert('Registration successful');
                            window.location.href = 'Home_logged.php';
                        }, 2000); // 2000 milliseconds = 2 seconds
                      </script>";
                exit(); // Stop further execution
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
