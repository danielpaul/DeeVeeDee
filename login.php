<?php
  // Page information
  $title = "Login";

  include('includes/header.php'); 
?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="form">

              <h3>Login</h3>

              <?php if(isset($_GET['msg']) && $_GET['msg'] == 1) { ?>
              <div class="msg">
                <p>User is not registered. <a href="register.php" title="Register">Register &rarr;</a></p>
              </div>
              <?php } else if(isset($_GET['msg']) && $_GET['msg'] == 2) { ?>
              <div class="msg">
                <p>Oops! Wrong password. Try again...</p>
              </div>
              <?php } ?>

              <!-- Login form -->
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
              <!-- / login form -->

            </section><!-- / #form -->


          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>