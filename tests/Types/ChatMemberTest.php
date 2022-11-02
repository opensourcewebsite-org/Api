<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMember;
use TelegramBot\Api\Types\ChatMemberAdministrator;
use TelegramBot\Api\Types\ChatMemberMember;
use TelegramBot\Api\Types\ChatMemberOwner;
use TelegramBot\Api\Types\User;

class ChatMemberTest extends TestCase
{
    public function testSetUser()
    {
        $item = new ChatMember();
        $user = User::fromResponse([
            'id' => 256,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]);
        $item->setUser($user);
        $this->assertEquals($user, $item->getUser());
    }

    public function testGetUser()
    {
        $item = new ChatMember();
        $user = User::fromResponse([
            'id' => 256,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]);
        $item->setUser($user);
        $this->assertEquals($user, $item->getUser());
    }

    public function testSetStatus()
    {
        $item = new ChatMember();
        $item->setStatus('creator');
        $this->assertEquals('creator', $item->getStatus());
    }

    public function testGatStatus()
    {
        $item = new ChatMember();
        $item->setStatus('member');
        $this->assertEquals('member', $item->getStatus());
    }

    public function testFromResponseOwner()
    {
        $data = [
            'status' => 'creator',
            'user' => array(
                'id' => 256,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
            'is_anonymous' => false,
            'custom_title' => 'owner_title',
        ];
        $chatMember = ChatMember::fromResponse($data);
        $this->assertInstanceOf('TelegramBot\Api\Types\ChatMemberOwner', $chatMember);
        $chatMemberOwner = ChatMemberOwner::fromResponse($data);
        $this->assertEquals($chatMember, $chatMemberOwner);
    }

    public function testFromResponseAdministrator()
    {
        $data = [
            'status' => 'administrator',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
            'can_be_edited' => false,
            'is_anonymous' => false,
            'can_manage_chat' => false,
            'can_delete_messages' => false,
            'can_manage_video_chats' => false,
            'can_restrict_members' => false,
            'can_promote_members' => false,
            'can_change_info' => false,
            'can_invite_users' => false,
        ];
        $chatMember = ChatMember::fromResponse($data);
        $chatMemberAdministrator = ChatMemberAdministrator::fromResponse($data);
        $this->assertInstanceOf('TelegramBot\Api\Types\ChatMemberAdministrator', $chatMember);
        $this->assertEquals($chatMember, $chatMemberAdministrator);

    }

    public function testFromResponseMember()
    {
        $data = [
            'status' => 'member',
            'user' => [
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ],
        ];

        $chatMember = ChatMember::fromResponse($data);
        $chatMemberMember = ChatMemberMember::fromResponse($data);
        $this->assertInstanceOf('TelegramBot\Api\Types\ChatMemberMember', $chatMember);
        $this->assertEquals($chatMemberMember, $chatMember);
    }

}
