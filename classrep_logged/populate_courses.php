<?php
include '../db_connection.php';

$courses_query = "SELECT * FROM courses";
$courses_result = mysqli_query($conn, $courses_query);
while ($row = mysqli_fetch_assoc($courses_result)) {
  echo "<option value='" . $row['course_id'] . "'>" . $row['course_name'] . "</option>";
}
?>
