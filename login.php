<?php
// Start session
session_start();

// Include the database connection file
include 'db_connection.php';

// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Function to verify user login
function verifyLogin($conn, $username, $password) {
    // Sanitize input to prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query to verify login credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if a row with the given username and password exists
    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();
        $userType = $row['user_type'];
        $user_reference_id = $row['user_reference_id'];

        // Print user_reference_id before setting session variable
        echo "User Reference ID: $user_reference_id<br>";

        // Set session variable
        $_SESSION['user_reference_id'] = $user_reference_id;

        // Redirect user based on user type
        switch ($userType) {
            case 'hod':
                header("Location: Hod_logged/hod-logged-in.php?user_reference_id=$user_reference_id");
                break;
            case 'representative':
                header("Location: classrep_logged/classrep_logged_in.php?user_reference_id=$user_reference_id");
                break;
            default:
                // Redirect to a default page if user type is not recognized
                header("Location: Home_logged.php");
        }
        exit; // Ensure script execution stops after redirection
    } else {
        // Show error message
        echo "<script>alert('Invalid username or password');</script>";
    }
}

// Verify login credentials
verifyLogin($conn, $username, $password);

// Close database connection after verifying login
$conn->close();
?>
