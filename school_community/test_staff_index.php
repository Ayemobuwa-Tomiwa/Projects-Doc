<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/test_style.css">
</head>
<body>




<!--Staff Signin Form-->
<div class="container" id="staff_signIn">
        <h1 class="form-title">MOFMED Staff Sign In</h1>
        <form method="post" action="test_staff_register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="staff_id" name="staff_id" id="staff_id" placeholder="staff_id" required>
              <label for="staff_id">Input your Staff_ID Number</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i> 
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="staff_signIn" style="padding: 17px;"><br><br>
         <button class="btn" name="signIn" style="padding: 0px;" onclick="window.location.href = 'test_index.php';"><input type="reset" class="btn" value="Sign In as A Student" name="signIn" style="padding: 17px;"></button>
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
          <button id="staffSignUpButton">Sign Up</button>
        </div>
      </div>



    <!--Staff Signup Form-->
    <div class="container" id="staff_signUp" style="display:none;">
      <h1 class="form-title">Register a Staff Account</h1>
      <form method="post" action="test_staff_register.php">
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
            <input type="text" name="staff_id" id="staff_id" placeholder="Staff ID" required>
            <label for="staff_id">Staff ID</label>
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
       <input type="submit" class="btn" value="Staff Sign Up" name="staff_signUp" style="padding: 17px;">
      </form>
      <p class="or">
        --------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
      <p>Sign In as a Student!<button id="staffSignInButton">Sign In</button></p>
      </div>
    </div>
    <script>
      const staffSignInButton=document.getElementById('staffSignInButton');
      const staffSignUpButton=document.getElementById('staffSignUpButton');
      const staffSignInForm=document.getElementById('staff_signIn');
      const staffSignUpForm=document.getElementById('staff_signUp');

      staffSignUpButton.addEventListener('click', function(){
        staffSignInForm.style.display="none";
        staffSignUpForm.style.display="block";
      })
      staffSignInButton.addEventListener('click', function(){
        staffSignInForm.style.display="block";
        staffSignUpForm.style.display="none";
      })
    </script>
</body>
</html>