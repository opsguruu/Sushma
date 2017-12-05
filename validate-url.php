<?php

/**
 * `FILTER_VALIDATE_URL` is used to filter the url. It gives you false if the provided field is not an URL.
 * It is helpful with users form to verify the details. 
 */

$check_url = "Hello World"; 

if(filter_var($check_url, FILTER_VALIDATE_URL)) {
  echo 'URL is valid, Please proceed';
} else {
  echo 'Please provide the URL.';
}

?>
