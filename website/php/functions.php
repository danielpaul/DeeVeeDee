<?php

  // Turn off error reporting
  // error_reporting(0);

  // Report runtime errors
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

  function get_youtube_id($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
  }



  function salt_pass($pass) {
    // generate a 16-character salt string
    $salt = substr(str_replace('+','.',base64_encode(md5(mt_rand(), true))),0,16);
    // how many times the string will be hashed
    $rounds = 10000;
    // pass in the password, the number of rounds, and the salt
    // $5$ specifies SHA256-CRYPT, use $6$ if you really want SHA512
    return crypt($pass, sprintf('$5$rounds=%d$%s$', $rounds, $salt));
    // output: $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
  }


  function pass_valid($given_hash, $test_pw) {
    // the hash stored for the user

    // extract the hashing method, number of rounds, and salt from the stored hash
    // and hash the password string accordingly
    $parts = explode('$', $given_hash);
    $test_hash = crypt($test_pw, sprintf('$%s$%s$%s$', $parts[1], $parts[2], $parts[3]));

    // compare
    // echo $given_hash . "\n" . $test_hash . "\n" . var_export($given_hash === $test_hash, true);
    /* output:
    $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
    $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
    true */

    return ($given_hash == $test_hash) ? true : false;
  }

?>