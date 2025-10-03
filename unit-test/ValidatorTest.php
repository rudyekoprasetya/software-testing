<?php
// File: ValidatorTest.php
use PHPUnit\Framework\TestCase;

require_once "Validator.php";

class ValidatorTest extends TestCase {
    // === Test Name ===
    public function testValidName() {
        $this->assertTrue(validateName("Rudy"));
        $this->assertTrue(validateName("Anna Maria"));
    }
    public function testEmptyNameThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        validateName("");
    }

    // === Test Age ===
    public function testValidAge() {
        $this->assertTrue(validateAge(30));
        $this->assertTrue(validateAge(-30));
    }
    public function testEmptyAgeThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}