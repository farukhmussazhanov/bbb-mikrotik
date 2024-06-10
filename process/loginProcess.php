<?php
session_start();
require_once "../classes/autoload.php";
if($_SERVER['REQUEST_METHOD']!=='POST'){
    die("NOT POST METHOD");
}

$username = htmlspecialchars( trim($_POST['login']));
$password = htmlspecialchars( trim($_POST['password']));

if(empty($username)||empty($password)){
    echo json_encode([
        "success" => false,
        "error"   => "Username or password is empty"
    ]);
    exit;
}
$auth = Auth::authenticate($username,$password);
if(empty($auth->success)){
    echo json_encode([
        "success" => false,
        "error"   => $auth->error
    ]);
    exit;
}
echo json_encode([
    "success" => true,
    "message" => $auth->message
]);

