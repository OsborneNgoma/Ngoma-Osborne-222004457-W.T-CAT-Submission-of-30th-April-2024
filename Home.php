<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Link to your CSS file -->
  <link rel="stylesheet" href="Home.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-image: url(Hod_logged/picture1.jpg);
  background-size: 100%;
  background-position: cover;
  background-repeat: no-repeat;

}

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7); /* Enhanced overlay color and opacity */
      z-index: -1; /* Place behind other content */
    }

</style>
<body>
    <div class="overlay"></div> <!-- Overlay added -->
  <div class="container">
    </form>
    <form class="signIn" method="POST" action="login.php">
      <h3>Welcome to Classroom Allocation M.S</h3>
      <input type="text" name="username" placeholder="Username" autocomplete="off" required />
      <input type="password" name="password" placeholder="Password" required />
      <button class="form-btn sx back" type="button">Sign Up</button>
      <button class="form-btn dx" type="submit">Log In</button>
    </form>
    <form class="signUp" id="signupForm"  method="POST" action="register.php">
      <h3>Create Your Account</h3>
      <input type="text" id="firstName" name="firstName" placeholder="First Name" required />
      <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
      <input type="email" id="email" name="email" placeholder="Email" required autocomplete="off" />
      <input type="text" id="username" name="username" placeholder="Username" required autocomplete="off" />
      <input type="password" id="password" name="password" placeholder="Password" required />

      <button class="form-btn sx log-in" type="button">Log In</button>
      <button class="form-btn dx" type="submit">Sign Up</button>
    
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="Home.js"></script>
</body>
</html>
