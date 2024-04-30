<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Course</title>
  <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Include your CSS file -->
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background-color: skyblue;
      text-align: center;
    }
    
    h1 {
      color: #333;
    }
    
    form {
      width: 300px;
      margin: 0 auto;
      background-color: green;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .container {
      width: 400px;
      margin: 0 auto;
      margin-top: 50px; /* Adjust as needed */
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group{
      margin: 10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      background-color: blue;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }


  </style>
</head>
<body>
  <h1>Insert Course</h1>
  <form action="insert_course.php" method="POST">
    <div class="form-group">
      <label for="course_name">Course Name:</label>
      <input type="text" id="course_name" name="course_name" required>
    </div>
    <div class="form-group">
      <label for="credits">Credits:</label>
      <input type="number" id="credits" name="credits" required>
    </div>
    <button type="submit">Insert Course</button>
  </form>
</body>
</html>
