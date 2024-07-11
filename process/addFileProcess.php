<?php
require_once "../classes/autoload.php";
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("POST REQUIRED");
}
$targetDir = "../uploads/";


// Путь до загруженного файла
$originalFileName = basename($_FILES["image"]["name"]);
$targetFile = $targetDir . $originalFileName;

// Чтение содержимого загруженного файла
$fileContent = file_get_contents($_FILES["image"]["tmp_name"]);
if (file_put_contents($targetFile, $fileContent) !== false) {
    // Успешная загрузка
    $response = [
        "success" => true,
        "message" => "File uploaded successfully."
    ];
} else {
    // Ошибка загрузки
    $response = [
        "success" => false,
        "error" => "There was an error uploading your file.1"
    ];
}

if(!Slider::add($targetFile)){
    $response = [
        "success" => false,
        "error" => "There was an error uploading your file.2",
    ];
}
// Возвращаем ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);
