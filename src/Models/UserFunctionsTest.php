<?php
require 'UserFunctions.php';
use PHPUnit\Framework\TestCase;

class UserFunctionsTest extends TestCase {
    public function testLoginReturnType() {
        $userFunctions = new UserFunctions();
        $result = $userFunctions->login("name@email.com", "name");
        $this->assertIsBool($result);
    }

    public function testRegisterReturnType() {
        $userFunctions = new UserFunctions();
        $userDetails["email"] = "nik@email.com";
        $userDetails["fullName"] = "Nik Paule";
        $userDetails["password"] = "myPassIsNik";
        $result = $userFunctions->register($userDetails);
        $this->assertIsBool($result);
    }

    public function testLoginSuccess() {
        $userFunctions = new UserFunctions();
        $result = $userFunctions->login("name@email.com", "name");
        $this->assertSame(true, $result);
    }

    public function testLoginFailure() {
        $userFunctions = new UserFunctions();
        $result = $userFunctions->login("exampla@e-mail.com", "nopassword");
        $this->assertSame(false, $result);
    }

    public function testRegistrationSuccess() {
        $userFunctions = new UserFunctions();
        $userDetails["email"] = "nik@email.com";
        $userDetails["fullName"] = "Nik Paule";
        $userDetails["password"] = "myPassIsNik";
        $result = $userFunctions->register($userDetails);
        $this->assertSame(true, $result);
        $this->assertCount(3, $userDetails);
    }

}