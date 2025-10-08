<?php
// File: Validator.php oke
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function ValidateName($name) {
    if(!is_string($name)) {
        throw new InvalidArgumentException("Nama Hanya Boleh Huruf");
    }
    if(trim($name) === "") {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    return true;
}

function validateGender($gender) {
    if (!is_string($gender)) {
        throw new InvalidArgumentException("Jenis kelamin harus berupa string");
    }
    $gender = strtoupper(trim($gender)); // normalisasi input

    if ($gender === "") {
        throw new InvalidArgumentException("Jenis kelamin tidak boleh kosong");
    }

    if ($gender !== "L" && $gender !== "P") {
        throw new InvalidArgumentException("Jenis kelamin harus 'L' atau 'P'");
    }

    return true;
}
