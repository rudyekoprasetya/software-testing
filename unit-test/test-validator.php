<?php
// File: test_age.php
require_once "Validator.php";

// Test Case 1: umur valid
try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: umur valid dari string angka
try {
    $result = validateAge("30");
    echo "PASS: Umur '30' diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur '30' tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: umur negatif
try {
    $result = validateAge(-5);
    echo "FAIL: Umur -5 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Umur -5 ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 4: input bukan angka
try {
    $result = validateAge("abc");
    echo "FAIL: Input 'abc' seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Input 'abc' ditolak. Error: " . $e->getMessage() . "\n";
}

// Test case 4 cek nama 
try {
    $result = ValidateName("Rudy Eko");
    echo "PASS: nama Rudy Seharusnya diterima \n";
} catch (Exception $e) {
    echo "FAIL: input Rudy Eko ditolak. Error ". $e->getMessage() . "\n";
}

try {
    $result = validateGender("P");
    echo "PASS: Jenis kelamin 'P' diterima\n";
} catch (Exception $e) {
    echo "FAIL: Jenis kelamin 'P' tidak diterima. Error: " . $e->getMessage() . "\n";
}
