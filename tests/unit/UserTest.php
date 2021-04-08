<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    public function testsetandGetName(){
        $user = new App\Models\User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), 'Billy');
    }
}