<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Coordinator</title>
  <style>
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
      background-color:pink;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }
    
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    
    button[type="submit"] {
      background-color: #4CAF50;
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
  <h1>Insert coordinator</h1>
  <form action="insert_coordinator.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="coordinator_name" name="coordinator_name" required><br>
    <label for="sex">Sex:</label>
    <select id="sex" name="sex" required>

      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone_number">phone_number:</label>
    <input type="text" id="phone_number" name="phone_number" required><br>
    <button type="submit">Insert coordinator</button>
  </form>
</body>
</html>
