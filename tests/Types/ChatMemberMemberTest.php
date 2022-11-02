<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberMember;
use TelegramBot\Api\Types\User;

class ChatMemberMemberTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberMember();
        $item->setStatus('member');
        $this->assertEquals('member', $item->getStatus());
    }

    public function testUser()
    {
        $item = new ChatMemberMember();
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
        $actual = ChatMemberMember::fromResponse([
            'status' => 'member',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
        ]);
        $expected = new ChatMemberMember();
        $expected->setStatus('member');
        $expected->setUser(User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]));
        $this->assertEquals($expected, $actual);
    }
}
