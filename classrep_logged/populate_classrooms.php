<?php
include '../db_connection.php';

$classrooms_query = "SELECT * FROM classrooms";
$classrooms_result = mysqli_query($conn, $classrooms_query);

if (!$classrooms_result) {
    die("Error fetching classrooms: " . mysqli_error($conn));
}

if (mysqli_num_rows($classrooms_result) == 0) {
    echo "<option value=''>No classrooms found</option>";
} else {
    while ($row = mysqli_fetch_assoc($classrooms_result)) {
        echo "<option value='" . $row['classroom_id'] . "'>" . $row['classroom_name'] . "</option>";
    }
}
?>
