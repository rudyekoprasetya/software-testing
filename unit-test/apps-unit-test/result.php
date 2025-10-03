<?php
// File: test_age.php
require_once "../Validator.php";

// tampung semua variable
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$gender=$_POST['gender'];

try {
    $result = validateAge($umur);
    echo "PASS: Umur ".$umur. " diterima\n <br>";
} catch (Exception $e) {
    echo "FAIL: Umur ".$umur. " tidak diterima. Error: " . $e->getMessage() . "\n <br>";
}

try {
    $result = ValidateName($nama);
    echo "PASS: nama ".$nama. " Seharusnya diterima \n <br>";
} catch (Exception $e) {
    echo "FAIL: input ".$nama. " ditolak. Error ". $e->getMessage() . "\n <br>";
}

try {
    $result = validateGender($gender);
    echo "PASS: Jenis kelamin ".$gender. " diterima \n <br>";
} catch (Exception $e) {
    echo "FAIL: Jenis kelamin ".$gender. " tidak diterima. Error: " . $e->getMessage() . "\n <br>";
}