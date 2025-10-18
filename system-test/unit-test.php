<?php
//load config.php
include("config/config.php");
require_once "ValidatorAPI.php";

//test case 1 tanpa api key
try {
    $apiKey="";
    $result = validateAPI($apiKey);
    echo "PASS : Request berhasil \n";
} catch(Exception $e) {
    echo "FAIL : gagal dikarenakan ". $e->getMessage(). "\n";
}
?>