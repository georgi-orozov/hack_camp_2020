<?php
require 'UserFunctions.php';
use PHPUnit\Framework\TestCase;

class UserFunctionsTest extends TestCase {

    public function testLogin() {
        $userFunctions = new UserFunctions();
        $result = $userFunctions->login("name@email.com", "name");
        $this->assertSame(true, $result);
    }
}