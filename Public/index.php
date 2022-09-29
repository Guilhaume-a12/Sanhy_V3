<?php
session_start();

require "../vendor/autoload.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

$router = new AltoRouter();

// HOME
$router->map('GET','/',[
    "controller" => "App\Controllers\MainController",
    "method" => "displayHome"
],'home');

require "Maps/sanhyMaps.php";
require "Maps/formationsMaps.php";
require "Maps/planningMaps.php";
require "Maps/userMaps.php";


$match = $router->match();


$dispatcher = new Dispatcher($match,"App\Controllers\ErrorController::error404");

$dispatcher->dispatch();
