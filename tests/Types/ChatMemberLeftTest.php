<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberLeft;
use TelegramBot\Api\Types\User;

class ChatMemberLeftTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberLeft();
        $item->setStatus('left');
        $this->assertEquals('left', $item->getStatus());
    }

    public function testUser()
    {
        $item = new ChatMemberLeft();
        $item->setUser(User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]));
        $this->assertEquals(
            User::fromResponse([
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ]),
            $item->getUser(),
        );
    }

    public function testFromResponse()
    {
        $actual = ChatMemberLeft::fromResponse([
            'status' => 'left',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
        ]);
        $expected = new ChatMemberLeft();
        $expected->setStatus('left');
        $expected->setUser(User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]));
        $this->assertEquals($actual, $expected);
    }
}
