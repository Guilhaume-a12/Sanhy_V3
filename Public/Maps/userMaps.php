<?php

// DISPLAY
$router->map('GET','/admin',[
    "controller" => "App\Controllers\User\UserController",
    "method" => "displayLogin"
],'user-display-login');

// LOGIN
$router->map('POST','/login',[
    "controller" => "App\Controllers\User\UserController",
    "method" => "login"
],'user-login');

// LOGOUT
$router->map('GET','/logout',[
    "controller" => "App\Controllers\User\UserController",
    "method" => "logout"
],'user-logout');