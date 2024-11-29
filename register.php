<?php
    include('function.php');

    if(isset($_POST['register'])) {
        register($_POST);
    }
?><!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Register</title>
</head>
<body>
  <div class="login-container">
    <h2>Register</h2>
    <form action="" method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-btn" name="register">Login</button>
      <div class="register-link">
        <p>Already have a account ? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>