<?php
  // Page information
  $title = "Checkout";

  include('includes/header.php'); 
?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="form">

              <h3>Checkout</h3>

              <form action="php/purchase.php" method="post">
                
                <div class="group">
                  <label for="card">Card Number</label>
                  <input type="number" id="card" name="card" placeholder="XXX XXX XXX XXX" required>
                </div>

                <div class="group">
                  <label for="exp">Expiry</label>
                  <input type="number" id="exp" name="exp" placeholder="MM/YY" required>
                </div>

                <div class="group">
                  <label for="cvc">CVC</label>
                  <input type="number" id="cvc" name="cvc" placeholder="XXX" required>
                </div>

                <div class="submit">
                  <button type="submit" class="button-yellow">Pay Now <?php if(isset($_GET['total'])) echo "- &euro;{$_GET['total']}"; ?></button>
                </div>
              </form>

            </section><!-- / #form -->


          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>