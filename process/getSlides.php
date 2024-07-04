<?php
require_once $_SERVER['DOCUMENT_ROOT'] ."/classes/autoload.php";
header('Access-Control-Allow-Origin: *');
$slides = Slider::getAll();
echo json_encode([
    "success" => true,
    "data"    => $slides
]);