<?php

// File : validatorAPI.php 
function validateAPI($apikey) {
    if(empty($apikey)) {
        throw new InvalidArgumentException("ApiKey tidak boleh kosong");
    }

    return true;    
}