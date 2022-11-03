<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatMemberRestricted;
use TelegramBot\Api\Types\User;

class ChatMemberRestrictedTest extends TestCase
{
    public function testStatus()
    {
        $item = new ChatMemberRestricted();
        $item->setStatus('restricted');
        $this->assertEquals('restricted', $item->getStatus());
    }

    public function testUser()
    {
        $item = new ChatMemberRestricted();
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

    public function testIsMember()
    {
        $item = new ChatMemberRestricted();
        $item->setIsMember(true);
        $this->assertEquals(true, $item->isMember());
    }

    public function testCanChangeInfo()
    {
        $item = new ChatMemberRestricted();
        $item->setCanChangeInfo(true);
        $this->assertEquals(true, $item->canChangeInfo());
    }

    public function testCanInviteUsers()
    {
        $item = new ChatMemberRestricted();
        $item->SetCanInviteUsers(true);
        $this->assertEquals(true, $item->canInviteUsers());
    }

    public function testCanPinMessages()
    {
        $item = new ChatMemberRestricted();
        $item->setCanPinMessages(false);
        $this->assertEquals(false, $item->canPinMessages());
    }

    public function testCanSendMessages()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendMessages(true);
        $this->assertEquals(true, $item->canSendMessages());
    }

    public function testCanSendMediaMessages()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendMediaMessages(false);
        $this->assertEquals(false, $item->canSendMediaMessages());
    }

    public function testCanSendPolls()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendPolls(true);
        $this->assertEquals(true, $item->canSendPolls());
    }

    public function testCanSendOtherMessages()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendOtherMessages(false);
        $this->assertEquals(false, $item->canSendOtherMessages());
    }

    public function testCanAddWebPagePreview()
    {
        $item = new ChatMemberRestricted();
        $item->setCanAddWebPagePreview(true);
        $this->assertEquals(true, $item->canAddWebPagePreview());
    }

    public function testUntilDate()
    {
        $item = new ChatMemberRestricted();
        $item->setUntilDate(512);
        $this->assertEquals(512, $item->getUntilDate());
    }

    public function testFromResponse()
    {
        $actual = ChatMemberRestricted::fromResponse([
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
            'until_date' => 512,
        ]);
        $expected = new ChatMemberRestricted();
        $expected->setStatus('restricted');
        $expected->setUser(User::fromResponse(array(
            'id' => 512,
            'is_bot' => false,
            'first_name' => 'bakteria',
        )));
        $expected->setIsMember(false);
        $expected->setCanChangeInfo(false);
        $expected->setCanInviteUsers(false);
        $expected->setCanPinMessages(false);
        $expected->setCanSendMessages(false);
        $expected->setCanSendMediaMessages(false);
        $expected->setCanSendPolls(false);
        $expected->setCanSendOtherMessages(false);
        $expected->setCanAddWebPagePreview(false);
        $expected->setUntilDate(512);

        $this->assertEquals($actual, $expected);
    }
}
