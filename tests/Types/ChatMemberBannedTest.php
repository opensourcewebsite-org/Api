<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberBanned;
use TelegramBot\Api\Types\User;

class ChatMemberBannedTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberBanned();
        $item->setStatus('kicked');
        $this->assertEquals('kicked', $item->getStatus());
    }

    public function testUser()
    {
        $item = new ChatMemberBanned();
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

    public function testUntilDate()
    {
        $item = new ChatMemberBanned();
        $item->setUntilDate(512);
        $this->assertEquals(512, $item->getUntilDate());
    }

    public function testFromResponse()
    {
        $actual = ChatMemberBanned::fromResponse([
            'status' => 'kicked',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
            'until_date' => 512,
        ]);
        $expected = new ChatMemberBanned();
        $expected->setStatus('kicked');
        $expected->setUser(User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]));
        $expected->setUntilDate(512);
        $this->assertEquals($expected, $actual);
    }
}
