<?php

// Define two variables
$date1 = '2022-01-01';
$date2 = '2022-01-31';

// Convert two dates to Unix timestamps
$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

// Calculate the difference between the two timestamps
$diff_seconds = abs($timestamp2 - $timestamp1);

// Convert the difference in seconds to the number of days
$diff_days = floor($diff_seconds / 86400);
