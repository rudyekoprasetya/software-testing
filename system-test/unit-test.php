<?php
//load config.php
include("config/config.php");

//test case 1 tanpa api key
try {
    $api_key="";
    $url="https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=".$api_key;
    //menyimpan hasil dalam variabel
    $data=http_request_get($url); 
    //konversi data json ke array
    $hasil=json_decode($data,true);
    echo "PASS: apikey tidak ada \n";
} catch(Exception $e) {
    echo "PASS: Exception ditangkap". $e->getMessage(). "\n";
}

//test case 2 salah kode country
try {
    $api_key=""
    $url="https://newsapi.org/v2/top-headlines?country=indo&apiKey=".$api_key;
    //menyimpan hasil dalam variabel
    $data=http_request_get($url); 
    //konversi data json ke array
    $hasil=json_decode($data,true);
    echo "FAIL: apikey tidak ada \n";
} catch(Exception $e) {
    echo "PASS: Exception ditangkap". $e->getMessage(). "\n";
}
?>