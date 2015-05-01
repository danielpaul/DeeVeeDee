<?php include('php/header.php'); ?>
		
		<p><?php echo $_GET['error_msg']; ?></p>
		
		<pre>
		  
		  
		  
		</pre>
	<div  id="input">

<form action="php/user_register.php" method="post">
First Name<br>
<input type="text" name="fname">
<br>
Last Name<br>
<input type="text" name="lname">
<br>
Username<br>
<input type="text" name ="username">
<br>
Email<br>
<input type="email" name ="email">
<br>
Password<br>
<input type="Password" name="pass_one">
<br>
Confirm Password<br>
<input type="Password" name="pass_two">


<button type="submit">Register</button>
</form>

<p>Already have an account?</p>
<a href="login.php" >Log in</a>
	
	<pre>
	  
	
	  
	</pre>
	
	</div>

<?php include('php/footer.php'); ?>