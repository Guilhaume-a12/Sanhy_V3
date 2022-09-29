<?php

// DISPLAY
$router->map('GET','/planning',[
    "controller" => "App\Controllers\Planning\PlanningController",
    "method" => "displayPlanning"
],'planning');

// ADD
$router->map('POST','/planning/add',[
    "controller" => "App\Controllers\Planning\PlanningController",
    "method" => "addPlanning"
],'planning-add');

// DELETE
$router->map('GET','/planning/delete/[i:id]',[
    "controller" => "App\Controllers\Planning\PlanningController",
    "method" => "deletePlanning"
],'planning-delete');