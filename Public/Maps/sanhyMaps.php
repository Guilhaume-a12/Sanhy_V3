<?php

$router->map('GET','/testez-vous',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayTestezVous"
],'testez-vous');

$router->map('GET','/mentions_legales',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayMentionsLegales"
],'mentions-legales');

$router->map('POST','/mentions_legales/cgv',[
    "controller" => "App\Controllers\MainController",
    "method" => "downloadCgv"
],'mentions-legales-cgv');

// ABOUT
$router->map('GET','/a_propos',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayAPropos"
],'a-propos');

// DISPLAY CONTACT
$router->map('GET','/contact',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayContact"
],'contact');

// SEND CONTACT
$router->map('POST','/contact/send',[
    "controller" => "App\Controllers\Mail\MailCOntroller",
    "method" => "sendEmail"
],'contact-send');

// DISPLAY REGISTERATION IN CONTACT
$router->map('POST','/contact/inscription',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayContact"
],'contact-inscription');
