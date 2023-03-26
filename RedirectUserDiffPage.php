<?php

// redirect function()
function redirectTo($url) {
    header("Location: $url");
    exit();
}

?>