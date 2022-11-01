<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once "method.php";
$mhs = new Mahasiswa();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
            $mhs->get_mhs();
        break;
    case 'POST': 
            $mhs->insert_mhs();
        break;
    default:
        // Invalid Request Method
            header("HTTP/1.0 405 Method Not Allowed");
            break;
        break;
}
?>