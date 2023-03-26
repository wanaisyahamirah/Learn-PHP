<?php

// redirect function()
function redirectTo($url) {
    header("Location: $url");
    exit();
}

// redirect to the W3Resource homepage
redirectTo("https://www.w3resource.com/");

?>