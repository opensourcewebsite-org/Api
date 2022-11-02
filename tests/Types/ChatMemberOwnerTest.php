<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberOwner;
use TelegramBot\Api\Types\User;

class ChatMemberOwnerTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberOwner();
        $item->setStatus('creator');
        $this->assertEquals('creator', $item->getStatus());
    }

    public function testIsAnonymous()
    {
        $item = new ChatMemberOwner();
        $item->setIsAnonymous(true);
        $this->assertEquals(true, $item->isAnonymous());
    }

    public function testCustomTitle()
    {
        $item = new ChatMemberOwner();
        $item->setCustomTitle('owner_title');
        $this->assertEquals('owner_title', $item->getCustomTitle());
    }

    public function testUser()
    {
        $item = new ChatMemberOwner();
        $user = User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]);
        $item->setUser($user);
        $this->assertEquals($user, $item->getUser());
    }

    public function testFromResponse()
    {
        $user = [
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ];
        $actual = ChatMemberOwner::fromResponse([
            'status' => 'creator',
            'user' => $user,
            'is_anonymous' => false,
            'custom_title' => 'custom_title',
        ]);
        $expected = new ChatMemberOwner();
        $expected->setStatus('creator');
        $expected->setUser(User::fromResponse($user));
        $expected->setCustomTitle('custom_title');
        $this->assertEquals($actual, $expected);
    }
}
