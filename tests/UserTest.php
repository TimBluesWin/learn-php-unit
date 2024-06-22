<?php

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(User::class)]
class UserTest extends TestCase{

    public function testReturnFullName()
    {
        $user = new User;
        $user->setFirstName("Timothy Aditya");
        $user->setLastName("Sutantyo");

        $this->assertEquals("Timothy Aditya Sutantyo", $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User();
        $this->assertEquals('', $user->getFullName());
    }

    // This will not run because it does not begin with "test"
    public function userHasFirstName()
    {
        $user = new User();
        $user->setFirstName("Timmy");
        $this->assertEquals('Timmy', $user->getFirstName());
    }

    public function testUserHasFirstName()
    {
        $user = new User();
        $user->setFirstName("Timmy");
        $this->assertEquals('Timmy', $user->getFirstName());
    }

    // this is another possibility. However in PHPUnit 11 this is deprecated.
    /**
     * @test
     */
    // public function user_has_first_name()
    // {
    //     $user = new User();
    //     $user->setFirstName("Timmy");
    //     $this->assertEquals('Timmy', $user->getFirstName());
    // }


}