<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChatInviteLink;
use TelegramBot\Api\Types\ChatMember;
use TelegramBot\Api\Types\ChatMemberUpdated;
use TelegramBot\Api\Types\User;

class ChatMemberUpdatedTest extends TestCase
{
    public function testSetChat()
    {
        $item = new ChatMemberUpdated();
        $chat = new Chat();
        $item->setChat($chat);
        $this->assertEquals($chat, $item->getChat());
    }

    public function testGetChat()
    {
        $item = new ChatMemberUpdated();
        $chat = new Chat();
        $item->setChat($chat);
        $this->assertEquals($chat, $item->getChat());
    }

    public function testSetFrom()
    {
        $item = new ChatMemberUpdated();
        $user = new User();
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testGetFrom()
    {
        $item = new ChatMemberUpdated();
        $user = new User();
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testSetDate()
    {
        $item = new ChatMemberUpdated();
        $item->setDate(15);
        $this->assertEquals(15, $item->getDate());
    }

    public function testGetDate()
    {
        $item = new ChatMemberUpdated();
        $item->setDate(15);
        $this->assertEquals(15, $item->getDate());
    }

    public function testSetOldChatMember()
    {
        $item = new ChatMemberUpdated();
        $member = new ChatMember();
        $item->setOldChatMember($member);
        $this->assertEquals($member, $item->getOldChatMember());
    }

    public function testGetOldChatMember()
    {
        $item = new ChatMemberUpdated();
        $member = new ChatMember();
        $item->setOldChatMember($member);
        $this->assertEquals($member, $item->getOldChatMember());
    }

    public function testSetNewChatMember()
    {
        $item = new ChatMemberUpdated();
        $member = new ChatMember();
        $item->setNewChatMember($member);
        $this->assertEquals($member, $item->getNewChatMember());
    }

    public function testGetNewChatMember()
    {
        $item = new ChatMemberUpdated();
        $member = new ChatMember();
        $item->setNewChatMember($member);
        $this->assertEquals($member, $item->getNewChatMember());
    }

    public function testSetInviteLink()
    {
        $item = new ChatMemberUpdated();
        $inviteLink = new ChatInviteLink();
        $item->setInviteLink($inviteLink);
        $this->assertEquals($inviteLink, $item->getInviteLink());
    }
}
