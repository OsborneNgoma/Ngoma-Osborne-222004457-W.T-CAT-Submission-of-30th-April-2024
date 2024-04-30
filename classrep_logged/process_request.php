<?php
session_start();
include '../db_connection.php';

// Retrieve data from POST request
$classroom_id = $_POST['classroom'];
$classTime = $_POST['classTime'];
$date = $_POST['date'];
$course_id = $_POST['course'];

// Check if the class_representative ID is set in the session
if(isset($_SESSION['user_reference_id'])) {
    $user_reference_id = $_SESSION['user_reference_id'];

    // Create a new MySQLi connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch class ID based on class_representative ID
    $sql = "SELECT class_id FROM classrepresentatives WHERE rep_id='$user_reference_id'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        // Fetch the class ID
        $row = $result->fetch_assoc();
        $class_id = $row['class_id'];

        // Insert data into timetables table
        $sql_insert = "INSERT INTO timetables (class_id, course_id, date, time_range, classroom_id) VALUES ('$class_id', '$course_id', '$date', '$classTime', '$classroom_id')";

        if ($conn->query($sql_insert) === TRUE) {
            // Class requested successfully
            echo "<script>
                        setTimeout(function() {
                            alert('Classroom booked successfully');
                            window.location.href = 'classrep_logged_in.php';
                        }, 2000); // 2000 milliseconds = 2 seconds
                      </script>";
            exit; // Stop further execution of PHP code
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Unable to fetch class ID.";
    }

    // Close the connection
    $conn->close();
} else{
	echo "not working";
}
?>
