<?php
  // Page information
  $title = "Login";
?>


<?php include('includes/header.php'); ?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="form">

              <h3>Login</h3>

              <form action="php/user_login.php" method="post">
                
                <div class="group">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" placeholder="Your Username" required>
                </div>

                <div class="group">
                  <label for="pass">Password</label>
                  <input type="password" id="pass" name="pass" placeholder="Your Password" required>
                </div>

                <div class="submit">
                  Need an account?
                  <a href="register.php" title="Register your free account">Register</a>

                  <button type="submit" class="button-white">Login</button>
                </div>
              </form>

            </section><!-- / #form -->


          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>