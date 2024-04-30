<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Head Of Department Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../classrep_logged/style.css">
  <style>
    body {
      background-image: url('../pictures/hodback1.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: -1;
    }
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    .dropdown-button {
      margin-top: 5px; /* Reduced margin */
    }
  </style>
</head>
<body>
  <div class="overlay"></div>
  <div class="logout-container">
    <button id="logoutButton" class="btn btn-danger">Logout</button>
  </div>
  <div class="container" style="background-color: skyblue;">
    <h1>Head Of Department Portal</h1>
    <div class="row align-items-center">
      <div class="col-md-6">
        <label for="view">View:</label>
        <select class="form-select" id="classroom" name="classroom">
          <option value="">...</option>
          <option value="Teachers">Teachers</option>
          <option value="class representatives">Class Representatives</option>
          <option value="Coordinators">Coordinators</option>
          <option value="classrooms">Classrooms</option>
          <option value="courses">Courses</option>
          <option value="Booking Records">Booking Records</option>
        </select>
      </div>
      <div class="col-md-6 dropdown-button"> <!-- Adjusted margin class -->
        <button type="button" class="btn btn-primary" id="ViewButton">View</button>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-6">
        <label for="view">Insert:</label>
        <select class="form-select" id="insertOption" name="course">
          <option value="">...</option>
          <option value="Teacher">Teacher</option>
          <option value="Coordinator">Coordinator</option>
          <option value="Course">Course</option>
        </select>
      </div>
      <div class="col-md-6 dropdown-button"> <!-- Adjusted margin class -->
        <button type="button" class="btn btn-primary" id="insertButton" style="margin-right: 50px;">Insert</button>
      </div>
    </div>
  </div>

  <div class="popup" id="tablePopup">
    <div class="table-container" id="tableContainer">
      <!-- Table will be inserted here -->
    </div>
    <button type="button" class="btn btn-danger" id="closePopup">Close</button>
  </div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('ViewButton').addEventListener('click', function() {
      var select = document.getElementById('classroom');
      var selectedValue = select.options[select.selectedIndex].value;
      var xhttp = new XMLHttpRequest();
      
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('tableContainer').innerHTML = this.responseText;
          document.getElementById('tablePopup').style.display = 'block'; // Show the popup
        }
      };
      
      // Send AJAX request based on selected value
      if (selectedValue === 'Teachers' || selectedValue === 'class representatives' || selectedValue === 'Coordinators' || selectedValue === 'classrooms' || selectedValue === 'courses' || selectedValue === 'Booking Records') {
        xhttp.open("POST", "handle_dropdown.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("action=view" + encodeURIComponent(selectedValue.replace(' ', '')));
      }
    });

    document.getElementById('logoutButton').addEventListener('click', function() {
      var confirmLogout = confirm('Are you sure you want to logout?');
      if (confirmLogout) {
        // Redirect to home page and destroy session
        window.location.href = 'logout.php';
      }
    });

    document.getElementById('insertButton').addEventListener('click', function() {
      var insertOption = document.getElementById('insertOption');
      var selectedInsertOption = insertOption.options[insertOption.selectedIndex].value;
      if (selectedInsertOption === 'Teacher') {
        // Redirect to teacher insertion form page
        window.location.href = 'teacher_insert_form.php';
      } else if (selectedInsertOption === 'Coordinator') {
        // Redirect to coordinator insertion form page
        window.location.href = 'coordinator_insert_form.php';
      } else if (selectedInsertOption === 'Course') {
        // Redirect to course insertion form page
        window.location.href = 'course_insert_form.php';
      }
      // Add more conditions for other insertion options if needed
    });

    document.getElementById('closePopup').addEventListener('click', function() {
      document.getElementById('tablePopup').style.display = 'none'; // Hide the popup
    });
  });
</script>
</body>
</html>
