<?php
// DISPLAY 
$router->map('GET','/formations/restauration_commerciale',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "displayRC"
],'formations-display-RC');

$router->map('GET','/formations/collectvites',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "displayC"
],'formations-display-C');

$router->map('GET','/formations/metiers_de_bouche',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "displayMB"
],'formations-display-MB');

$router->map('GET','/formations/fabrication_de_produits',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "displayFP"
],'formations-display-FP');

// ADD
$router->map('POST','/formations/add',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "addFormation"
],'formations-add');

// DELETE
$router->map('GET','/formations/delete/[i:id]/[*:action]',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "deleteFormation"
],'formations-delete');

// MODIFY
$router->map('GET','/formations/modify/[i:id]',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "toModifyFormation"
],'formations-modify');

$router->map('POST','/formations/modify-validate',[
    "controller" => "App\Controllers\Formations\FormationsController",
    "method" => "modifyFormation"
],'formations-modify-validate');