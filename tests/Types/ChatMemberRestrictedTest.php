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

    public function testCanSendAudios()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendAudios(false);
        $this->assertEquals(false, $item->canSendAudios());
    }

    public function testCanSendPhotos()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendDocuments(false);
        $this->assertEquals(false, $item->canSendDocuments());
    }

    public function testCanSendDocuments()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendPhotos(false);
        $this->assertEquals(false, $item->canSendPhotos());
    }

    public function testCanSendVideos()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendVideos(false);
        $this->assertEquals(false, $item->canSendVideos());
    }

    public function testCanSendVideoNotes()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendVideoNotes(false);
        $this->assertEquals(false, $item->canSendVideoNotes());
    }

    public function testCanSendVoiceNotes()
    {
        $item = new ChatMemberRestricted();
        $item->setCanSendVoiceNotes(false);
        $this->assertEquals(false, $item->canSendVoiceNotes());
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
        $item->setCanAddWebPagePreviews(true);
        $this->assertEquals(true, $item->canAddWebPagePreviews());
    }

    public function testCanManageTopics()
    {
        $item = new ChatMemberRestricted();
        $item->setCanManageTopics(false);
        $this->assertEquals(false, $item->canManageTopics());
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
            'can_manage_topics' => false,
            'can_send_messages' => false,
            'can_send_photos' => false,
            'can_send_audios' => false,
            'can_send_documents' => false,
            'can_send_videos' => false,
            'can_send_video_notes' => false,
            'can_send_voice_notes' => false,
            'can_send_polls' => false,
            'can_send_other_messages' => false,
            'can_add_web_page_previews' => false,
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
        $expected->setCanSendAudios(false);
        $expected->setCanSendPhotos(false);
        $expected->setCanSendDocuments(false);
        $expected->setCanSendVideos(false);
        $expected->setCanSendVideoNotes(false);
        $expected->setCanSendVoiceNotes(false);
        $expected->setCanSendPolls(false);
        $expected->setCanSendOtherMessages(false);
        $expected->setCanAddWebPagePreviews(false);
        $expected->setCanManageTopics(false);
        $expected->setUntilDate(512);

        $this->assertEquals($actual, $expected);
    }
}
