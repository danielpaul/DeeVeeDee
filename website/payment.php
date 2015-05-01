<?php include('php/header.php'); ?>
	
	<section id = "user_details_payment_page">
	
	<h1>Your Details are as follows</h1>
	
	<ul>
	<li>Username : "abc123"</li>
	<li>First Name : "Joe"</li>
	<li>Last Name : "Blogg"</li>
	<li>Email Address : "jblog@gmail.com""</li>
	</ul>
	
	<h1>Subtotal : XXX</h1>
	
	</section>
	
	<section id = "cc_details_submission">
	
	<h1>Please enter your payment details</h1>
	<form>
	Name on card:<br>
	<input type="text" name="ccName">
	<br>
	Credit Card Number:<br>
	<input type="number" name="ccNumber">
	<br>
	Expiry Date:<br>
	<input type="date" name="ccExpiryDate">
	<br>
	CCV Number:<br>
	<input type="number" name="ccv">
	<br>
	<button type="button">Make Payment</button>
	</form>
	
	</section>
	
				
<?php include('php/footer.php'); ?>