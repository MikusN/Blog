<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(); // executes
}

function redirectIfNotFound($location = "/"){
    http_response_code(404);
    header("Location: $location", true, 302);
    exit(); // Like die(), but less strong
}