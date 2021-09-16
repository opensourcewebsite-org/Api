<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\User;

class UserTest extends TestCase
{
    public function testSetDuration()
    {
        $item = new User();
        $item->setId(1);
        $this->assertEquals(1, $item->getId());
    }

    public function testSet64bitId()
    {
        $item = new User();
        $item->setId(2147483648);
        $this->assertEquals(2147483648, $item->getId());
    }

    public function testGetDuration()
    {
        $item = new User();
        $item->setId(1);
        $this->assertEquals(1, $item->getId());
    }

    public function testSetFirstName()
    {
        $item = new User();
        $item->setFirstName('Ilya');
        $this->assertEquals('Ilya', $item->getFirstName());
    }

    public function testGetFirstName()
    {
        $item = new User();
        $item->setFirstName('Ilya');
        $this->assertEquals('Ilya', $item->getFirstName());
    }

    public function testSetLastName()
    {
        $item = new User();
        $item->setLastName('Gusev');
        $this->assertEquals('Gusev', $item->getLastName());
    }

    public function testGetLastName()
    {
        $item = new User();
        $item->setLastName('Gusev');
        $this->assertEquals('Gusev', $item->getLastName());
    }

    public function testSetUsername()
    {
        $item = new User();
        $item->setUsername('iGusev');
        $this->assertEquals('iGusev', $item->getUsername());
    }

    public function testGetUsername()
    {
        $item = new User();
        $item->setUsername('iGusev');
        $this->assertEquals('iGusev', $item->getUsername());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetIdException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new User();
        $item->setId('s');
    }

    public function testFromResponse()
    {
        $user = User::fromResponse(array(
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev'
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\User', $user);
        $this->assertEquals(123456, $user->getId());
        $this->assertEquals('Ilya', $user->getFirstName());
        $this->assertEquals('Gusev', $user->getLastName());
        $this->assertEquals('iGusev', $user->getUsername());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $user = User::fromResponse(array(
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev'
        ));
    }
    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $user = User::fromResponse(array(
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'username' => 'iGusev'
        ));
    }
}
