<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Representative Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="logout-container">
      <button id="logoutButton" class="btn btn-danger">Logout</button>
    </div>
  <div class="container">
    <h1>Class Representative Portal</h1>
    <div class="dropdown-container">
      <div class="col-md-6">
        <label for="classroom">Select Classroom:</label>
        <select class="form-select" id="classroom" name="classroom">
          <option value="">Select Classroom...</option>
          <?php include 'populate_classrooms.php'; ?>
        </select>
      </div>
    </div>
    <div class="dropdown-container">
      <div class="col-md-6">
        <label for="classTime">Select Class Time:</label>
        <select class="form-select" id="classTime">
          <option value="">Select Time...</option>
          <option value="1">8:30 AM - 12:00 PM</option>
          <option value="2">2:00 PM - 5:00 PM</option>
        </select>
      </div>
    </div>
    <div class="dropdown-container">
      <div class="col-md-6">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date">
      </div>
    </div>
    <div class="dropdown-container">
      <div class="col-md-6">
        <label for="course">Select Course:</label>
        <select class="form-select" id="course" name="course">
          <option value="">Select Course...</option>
          <?php include 'populate_courses.php'; ?>
        </select>
      </div>
    </div>
    <button type="button" class="btn btn-primary" id="requestButton">Request Class</button>
  </div>
  <!-- <script src="script.js"></script> -->
    <script>
    document.getElementById('logoutButton').addEventListener('click', function() {
      var confirmLogout = confirm('Are you sure you want to logout?');
      if (confirmLogout) {
        // Redirect to home page and destroy session
        window.location.href = 'logout.php';
      }
    });

document.getElementById('requestButton').addEventListener('click', function() {
  var classroom_id = classroom.options[classroom.selectedIndex].value;
  var classTime = document.getElementById('classTime').value;
  var date = document.getElementById('date').value;
  var course_id = course.options[course.selectedIndex].value;

  // Send data to PHP script
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "process_request.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          // Response from server
          console.log(this.responseText);
      }
  };
  xhr.send("&classroom=" + classroom_id + "&classTime=" + classTime + "&date=" + date + "&course=" + course_id);
});
  </script>
</body>
</html>
