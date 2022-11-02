<?php

namespace TelagramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberAdministrator;
use TelegramBot\Api\Types\User;

class ChatMemberAdministratorTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberAdministrator();
        $item->setStatus('administrator');
        $this->assertEquals('administrator', $item->getStatus());
    }

    public function testUser()
    {
        $item = new ChatMemberAdministrator();
        $user = User::fromResponse(array(
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ));
        $item->setUser($user);
        $this->assertEquals($user, $item->getUser());
    }

    public function testCanBeEdited()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanBeEdited(false);
        $this->assertEquals(false, $item->canBeEdited());
    }

    public function testIsAnonymous()
    {
        $item = new ChatMemberAdministrator();
        $item->setIsAnonymous(true);
        $this->assertEquals(true, $item->isAnonymous());
    }

    public function testCanManageChat()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanManageChat(false);
        $this->assertEquals(false, $item->canManageChat());
    }

    public function testCanDeleteMessages()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanDeleteMessages(true);
        $this->assertEquals(true, $item->canDeleteMessages());
    }

    public function testCanManageVideoChats()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanManageVideoChats(false);
        $this->assertEquals(false, $item->canManageVideoChats());
    }

    public function testCanRestrictMembers()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanRestrictMembers(true);
        $this->assertEquals(true, $item->canRestrictMembers());
    }

    public function testCanPromoteMembers()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanPromoteMembers(false);
        $this->assertEquals(false, $item->canPromoteMembers());
    }

    public function testCanChangeInfo()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanChangeInfo(true);
        $this->assertEquals(true, $item->canChangeInfo());
    }

    public function testCanInviteUsers()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanInviteUsers(false);
        $this->assertEquals(false, $item->canInviteUsers());
    }

    public function testCanPostMessages()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanPostMessages(true);
        $this->assertEquals(true, $item->canPostMessages());
    }

    public function testCanEditMessages()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanEditMessages(false);
        $this->assertEquals(false, $item->canEditMessages());
    }

    public function testCanPinMessages()
    {
        $item = new ChatMemberAdministrator();
        $item->setCanPinMessages(true);
        $this->assertEquals(true, $item->canPinMessages());
    }

    public function testCustomTitle()
    {
        $item = new ChatMemberAdministrator();
        $item->setCustomTitle('custom_title');
        $this->assertEquals('custom_title', $item->getCustomTitle());
    }

    public function testFromResponse()
    {
        $actual = ChatMemberAdministrator::fromResponse([
            'user' => [
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ],
            'status' => 'administrator',
            'can_be_edited' => false,
            'is_anonymous' => false,
            'can_manage_chat' => false,
            'can_delete_messages' => false,
            'can_manage_video_chats' => false,
            'can_restrict_members' => false,
            'can_promote_members' => false,
            'can_change_info' => false,
            'can_invite_users' => false,
        ]);
        $expected = new ChatMemberAdministrator();
        $expected->setUser(User::fromResponse([
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]));
        $expected->setStatus('administrator');
        $expected->setCanBeEdited(false);
        $expected->setIsAnonymous(false);
        $expected->setCanManageChat(false);
        $expected->setCanDeleteMessages(false);
        $expected->setCanManageVideoChats(false);
        $expected->setCanRestrictMembers(false);
        $expected->setCanPromoteMembers(false);
        $expected->setCanChangeInfo(false);
        $expected->setCanInviteUsers(false);
        $this->assertEquals($actual, $expected);
    }
}
