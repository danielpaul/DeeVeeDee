<?php
  // Page information
  $title = "Register";

  include('includes/header.php'); ?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="form">

              <h3>Register</h3>

              <form id="register" action="php/user_register.php" method="post">
                
                <div class="group">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" placeholder="Your First Name" required>
                </div>

                <div class="group">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" placeholder="Your Last Name" required>
                </div>

                <div class="group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                </div>

                <div class="group">
                  <label for="username">Username <small></small></label>
                  <input type="text" id="username" name="username" placeholder="Pick a username" required>
                </div>

                <div class="group">
                  <label for="pass_one">Password</label>
                  <input type="password" id="pass_one" name="pass_one" placeholder="Your Password">
                </div>

                <div class="group">
                  <label for="pass_two">Confirm Password</label>
                  <input type="password" id="pass_two" name="pass_two" placeholder="Your Password Again">
                </div>

                <div class="submit">
                  Have an account?
                  <a href="login.php" title="Login with your account">Login</a>
                  
                  <button type="submit" class="button-white">Register</button>
                </div>
              </form>

            </section><!-- / #form -->


          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>