<?php
require_once "../classes/autoload.php";
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("POST REQUIRED");
}
if(!isset($_POST['id'])){
    $response = [
        "success" => false,
        "error" => "id is required"
    ];
}
else{
    $src = Slider::getSrcById((int)$_POST['id']);
    if(!Slider::remove((int)$_POST['id']))
    {
        $response = [
            "success" => false,
            "error" => "Error while removing file"
        ];
    }
    else {
        unlink($src);
        $response = [
            "success" => true,
            "message" => "File removed successfully."
        ];
    }
}


// Возвращаем ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);
