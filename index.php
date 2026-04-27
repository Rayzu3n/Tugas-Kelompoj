<?php
include 'konek.php';
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-login">
    <!-- Toggle Buttons -->


    <div class="toggle-buttons">
      <button id="btn-login" class="active" onclick="showForm('login')">Login</button>
      <button id="btn-register" onclick="showForm('register')">Register</button>
    </div>

    <!-- Login Form -->
    <div id="form-login" class="form-container">
      <h2>Login</h2>
      <form action="index.php" method="POST">
        <input type="hidden" name="login" value="1">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn-submit">Login</button>
      </form>
    </div>

    <!-- Register Form -->
    <div id="form-register" class="form-container hidden">
      <h2>Register</h2>
      <form action="index.php" method="POST">
        <input type="hidden" name="register" value="1">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn-submit">Register</button>
      </form>
    </div>
  </div>

  </div>
  <script>
    function showForm(formName) {
      const loginForm = document.getElementById('form-login');
      const registerForm = document.getElementById('form-register');
      const btnLogin = document.getElementById('btn-login');
      const btnRegister = document.getElementById('btn-register');

      if (formName === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        btnLogin.classList.add('active');
        btnRegister.classList.remove('active');
      } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        btnLogin.classList.remove('active');
        btnRegister.classList.add('active');
      }
    }
  </script>
</body>

</html>