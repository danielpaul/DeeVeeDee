<?php
require_once('functions.php');

// user information
$fname = $_POST['fname'];
if(empty($fname)) 
  header("Location: ../register.php");

$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];

$pass_one = $_POST['pass_one'];
$pass_two = $_POST['pass_two'];

if($pass_one != $pass_two)
  header("Location: ../register.php?msg=Confirm Password");


/*
 * PHP PGSQL - How to insert rows into PostgreSQL table
 */
 
// Connecting, selecting database
db_connect();

//perform the insert using pg_query
$result = pg_query($dbconn, "INSERT INTO users(user_fname, user_lname, username, user_email, user_password) VALUES('{$fname}', '{$lname}', '{$username}', '{$email}', '".salt_pass($pass_one)."')");

//dump the result object
// var_dump($result);

// Closing connection
pg_close($dbconn);


// Login user
$_SESSION["logged"] = $username;


header("Location: ../movies.php");

?>