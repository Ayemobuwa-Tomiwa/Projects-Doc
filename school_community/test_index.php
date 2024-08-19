<?php

include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/test_style.css">
</head>
<body>


<!---Sign in--->
<div class="container" id="signIn">
        <h1 class="form-title">MOFMED Sign In</h1>
        <form method="post" action="test_register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="matric" name="matric" id="matric" placeholder="matric" required>
              <label for="matric">Matric Number</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
          <input style="padding: 17px;" type="submit" class="btn" value="Sign In" name="signIn"><br><br>
          <button class="btn" style="padding: 0px;" onclick="window.location.href = 'test_staff_index.php';"><input type="submit" class="btn" value="Staff Sign In" name="staff_signIn" style="padding: 17px;"></button>
        </form>
        <p class="or">
          --------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>


    <!--Signup Form-->
    <div class="container" id="signUp" style="display:none;">
      <h1 class="form-title">Register a Student Account</h1>
      <form method="post" action="test_register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="matric" id="matric" placeholder="Matric Number" required>
            <label for="matric">Matric Number</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp" style="padding: 17px;">
      </form>
      <p class="or">
        -------or-------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>
      <script src="test_script.js"></script>
</body>
</html>