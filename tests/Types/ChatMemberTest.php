<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMember;
use TelegramBot\Api\Types\ChatMemberAdministrator;
use TelegramBot\Api\Types\ChatMemberLeft;
use TelegramBot\Api\Types\ChatMemberMember;
use TelegramBot\Api\Types\ChatMemberOwner;
use TelegramBot\Api\Types\ChatMemberRestricted;
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

    public function testFromResponseRestricted()
    {
        $data = [
            'status' => 'restricted',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
            'is_member' => false,
            'can_change_info' => false,
            'can_invite_users' => false,
            'can_pin_messages' => false,
            'can_send_messages' => false,
            'can_send_media_messages' => false,
            'can_send_polls' => false,
            'can_send_other_messages' => false,
            'can_add_web_page_preview' => false,
            'until_date' => 512
        ];

        $chatMember = ChatMember::fromResponse($data);
        $chatMemberRestricted = ChatMemberRestricted::fromResponse($data);

        $this->assertInstanceOf('TelegramBot\Api\Types\ChatMemberRestricted', $chatMember);
        $this->assertEquals($chatMember, $chatMemberRestricted);
    }

    public function testFromResponseLeft()
    {
        $data = [
            'status' => 'left',
            'user' => array(
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ),
        ];
        $chatMember = ChatMember::fromResponse($data);
        $chatMemberLeft = ChatMemberLeft::fromResponse($data);
        $this->assertInstanceOf('TelegramBot\Api\Types\ChatMemberLeft', $chatMember);
        $this->assertEquals($chatMember, $chatMemberLeft);
    }
}
