<?php

function getCurrentFileName() {
    return basename($_SERVER['PHP_SELF']);
}

// Call the function to get the current file name
$currentFileName = getCurrentFileName();

?>