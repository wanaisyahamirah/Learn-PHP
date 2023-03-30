<?php

// Get user agent string
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Define array of known browsers and their user agent strings
$known_browsers = array(
    'Chrome' => 'Chrome',
    'Firefox' => 'Firefox',
    'Safari' => 'Safari',
    'Opera' => 'Opera',
    'Internet Explorer' => 'MSIE',
    'Edge' => 'Edge'
  );
  
  // Loop through the array of known browsers and check if the user agent string contains the browser's user agent string
    foreach ($known_browsers as $browser => $browser_string) {
    if (strpos($user_agent, $browser_string) !== false) {
      echo "You are using " . $browser . ".";
      break;
    }
  }


?>