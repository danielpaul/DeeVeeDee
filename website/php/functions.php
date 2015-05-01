<?php

  function get_youtube_id($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
  }

?>