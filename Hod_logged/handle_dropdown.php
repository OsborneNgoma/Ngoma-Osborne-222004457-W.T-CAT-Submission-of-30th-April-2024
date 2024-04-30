<?php
include '../db_connection.php';

// Handle AJAX request
if(isset($_POST['action'])) {
    // Check which action is requested
    switch($_POST['action']) {
        case 'viewTeachers':
            displayTeachers();
            break;
        case 'viewclassrepresentatives':
            displayClassRepresentatives();
            break;
        case 'viewCoordinators':
            displayCoordinators();
            break;
        case 'viewclassrooms':
            displayClassrooms();
            break;
        case 'viewcourses':
            displayCourses();
            break;
        case 'viewBookingRecords':
            displayBookingRecords();
            break;
        // Add more cases for other dropdown options if needed
    }
}

// Function to fetch and display teachers table
function displayTeachers() {
    // Your database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch teachers data from database
    $sql = "SELECT * FROM teachers"; // Change 'teachers' with your actual table name
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['teacher_id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close connection
    mysqli_close($conn);
}

// Function to fetch and display class representatives table
function displayClassRepresentatives() {
    // Your database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch class representatives data from database
    $sql = "SELECT * FROM classrepresentatives"; // Change 'class_representatives' with your actual table name
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['rep_id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close connection
    mysqli_close($conn);
}

// Function to fetch and display coordinators table
function displayCoordinators() {
    // Your database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch coordinators data from database
    $sql = "SELECT * FROM coordinators"; // Change 'coordinators' with your actual table name
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['coordinator_id'] . "</td>";
        echo "<td>" . $row['coordinator_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close connection
    mysqli_close($conn);
}

// Function to fetch and display classrooms table
function displayClassrooms() {
    // Your database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch classrooms data from database
    $sql = "SELECT * FROM classrooms"; // Change 'classrooms' with your actual table name
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Location</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['classroom_id'] . "</td>";
        echo "<td>" . $row['classroom_name'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close connection
    mysqli_close($conn);
}

// Function to fetch and display courses table
function displayCourses() {
    // Your database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch courses data from database
    $sql = "SELECT * FROM courses"; // Change 'courses' with your actual table name
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Teacher</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['course_id'] . "</td>";
        echo "<td>" . $row['course_name'] . "</td>";
        echo "<td>" . $row['Teachers_id'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close connection
    mysqli_close($conn);
}

// Function to fetch and display booking records table
// Function to fetch and display booking records table
function displayBookingRecords() {
    // Your database connection details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "cams";
    
    // Connect to the database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // Check the database connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to fetch booking records data with class names from the database
    $sql = "SELECT bookingrecords.booking_id, classrooms.classroom_name, bookingrecords.timestamp FROM bookingrecords
            INNER JOIN classrooms ON bookingrecords.class_id = classrooms.classroom_id"; 
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Display table header
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Class</th>";
    echo "<th>Booking Date</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Display data rows
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['booking_id'] . "</td>";
        echo "<td>" . $row['classroom_name'] . "</td>";
        echo "<td>" . $row['timestamp'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

    // Close the database connection
    mysqli_close($conn);
}

?>
