<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/signin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

      <div class="wrapper">

         <div class="title-text">
            <div style="font-size:35px; font-weight:bold">
               Login & Signup Form
            </div>
         </div>

         <!--signup and login form-->

         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup" >
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>


            <div class="form-inner">
               <form action="includes/login.inc.php" class="login" method="post">
                  <div class="field">
                     <input type="text" name="uid" placeholder="Username/Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="pwd" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Don't have an account yet? <a href="">Signup now</a>
                  </div>
               </form>

               <form action="includes/signup.inc.php" class="signup" method="post">
               <div class="field">
                    <input type="text" name="uid" placeholder="Username" required>
                 </div>
                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="pwd" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="pwdrepeat" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Signup">
                  </div>
                  <div class="login-link">
                    Already have an account? <a href="">Login</a>
                 </div>
               </form>
            </div>

            <?php
      if (isset($_GET["error"])){
         if($_GET["error"] == "emptyinput"){
            echo "<p>Fill all the field!</p>";
         }
         else if ($_GET["error"] == "invaliduid"){
            echo "<p>Invalid Username</p>";
         }
         else if ($_GET["error"] == "invalidemail"){
            echo "<p>Invalid Email</p>";
         }
         else if ($_GET["error"] == "passworddontmatch"){
            echo "<p>Passwords doesn't match.</p>";
         }
         else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong! Try again!</p>";
         }
         else if ($_GET["error"] == "usernametakenoremailtaken"){
            echo "<p>Username/Email already taken.</p>";
         }
         else if ($_GET["error"] == "none"){
            echo "<p>You have signed up successfully!</p>";
         }
         else if ($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect Login Information</p>";
      }
      }
      ?>

         </div>

      </div>

      <script type="text/javascript" src="js/form-animation.js"></script>

   </body>
</html>