<?php
require_once "../classes/autoload.php";
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("POST REQUIRED");
}
//echo "<pre>".var_export($_POST,true)."</pre>";
//die();
$response = [
    "success" => true,
    "message" => false,
];
function getRealIpAddr() {
    if (!empty($_SERVER['realip'])) {
        $ip = $_SERVER['realip'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Check IP from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Check IP from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
        // Check IP from nginx
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    } else {
        // Default to REMOTE_ADDR
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
try {
    $pdo = DbConfig::getInstance();
}
catch (PDOException $exception)
{
    $response['success'] = false;
    $response['message'] = $exception->getMessage();
    echo json_encode($response);
    exit;
}

$fio    = htmlspecialchars( trim($_POST['fio']) );
$phone  = htmlspecialchars( trim($_POST['phone']) );

//$ip = getRealIpAddr();

if(empty($fio))
{
    $response['success'] = false;
    $response['message'] = "FIO is required";
    echo json_encode($response);
    exit;
}
if(empty($phone))
{
    $response['success'] = false;
    $response['message'] = "Phone required";
    echo json_encode($response);
    exit;
}
$mac            = htmlspecialchars($_POST['mac']);
$ip             = htmlspecialchars($_POST['ip']);
$linkLogin      = htmlspecialchars($_POST['login']);


$sql = "INSERT INTO clients(fio,phone,ipaddress,mac) 
VALUES(
       :fio,
       :phone,
       :ipaddress,
       :mac
)";
$c_iq = $pdo->getConnection()->prepare($sql);
$c_iq->bindParam(':fio', $fio);
$c_iq->bindParam(':phone', $phone);
$c_iq->bindParam(':ipaddress', $ip);
$c_iq->bindParam(':mac', $mac);

$result = $c_iq->execute();

if(!$result){
    $response['success'] = false;
    $response['message'] = $c_iq->errorInfo();
    echo json_encode($response);
}
$response['mikrot'] = [
    'mac' => $mac,
    'ip' => $ip,
    'link_login' => $linkLogin,
    'link_orig' => "https://blabla.bar/"
];
/*MikrotikRequest::make($linkLogin,[
    'mac' => $mac,
    'ip' => $ip,
//    'username' => $username,
//    'password' => $password,
    'link-login' => $linkLogin,
    'link-orig' => "https://blabla.bar/"
]);*/
$response["message"] = "Success";
echo json_encode($response);

