<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatInviteLink;
use TelegramBot\Api\Types\User;

class ChatInviteLinkTest extends TestCase
{
    public function testSetInviteLink()
    {
        $item = new ChatInviteLink();
        $item->setInviteLink("https://invite.com");
        $this->assertEquals("https://invite.com", $item->getInviteLink());
    }

    public function testGetInviteLink()
    {
        $item = new ChatInviteLink();
        $item->setInviteLink("https://invite.com");
        $this->assertEquals("https://invite.com", $item->getInviteLink());
    }

    public function testSetCreator()
    {
        $item = new ChatInviteLink();
        $creator = new User();
        $item->setCreator($creator);
        $this->assertEquals($creator, $item->getCreator());
    }

    public function testGetCreator()
    {
        $item = new ChatInviteLink();
        $creator = new User();
        $item->setCreator($creator);
        $this->assertEquals($creator, $item->getCreator());
    }

    public function testSetCreatesJoinRequest()
    {
        $item = new ChatInviteLink();
        $item -> setCreatesJoinRequest(true);
        $this->assertEquals(true, $item->getCreatesJoinRequest());
    }

    public function testGetCreatesJoinRequest()
    {
        $item = new ChatInviteLink();
        $item -> setCreatesJoinRequest(true);
        $this->assertEquals(true, $item->getCreatesJoinRequest());
    }

    public function testSetIsPrimary()
    {
        $item = new ChatInviteLink();
        $item->setIsPrimary(true);
        $this->assertEquals(true, $item->getIsPrimary());
    }

    public function testGetIsPrimary()
    {
        $item = new ChatInviteLink();
        $item->setIsPrimary(true);
        $this->assertEquals(true, $item->getIsPrimary());
    }

    public function testSetIsRevoked()
    {
        $item = new ChatInviteLink();
        $item->setIsRevoked(true);
        $this->assertEquals(true, $item->getIsRevoked());
    }

    public function testGetIsRevoked()
    {
        $item = new ChatInviteLink();
        $item->setIsRevoked(true);
        $this->assertEquals(true, $item->getIsRevoked());
    }

    public function testSetName()
    {
        $item = new ChatInviteLink();
        $item->setName("link_name");
        $this->assertEquals("link_name", $item->getName());
    }

    public function testGetName()
    {
        $item = new ChatInviteLink();
        $item->setName("link_name");
        $this->assertEquals("link_name", $item->getName());
    }

    public function testSetExpireDate()
    {
        $item = new ChatInviteLink();
        $item->setExpireDate(15);
        $this->assertEquals(15, $item->getExpireDate());
    }

    public function testGetExpireDate()
    {
        $item = new ChatInviteLink();
        $item->setExpireDate(15);
        $this->assertEquals(15, $item->getExpireDate());
    }

    public function testSetMemberLimit()
    {
        $item = new ChatInviteLink();
        $item->setMemberLimit(15);
        $this->assertEquals(15, $item->getMemberLimit());
    }

    public function testGetMemberLimit()
    {
        $item = new ChatInviteLink();
        $item->setMemberLimit(15);
        $this->assertEquals(15, $item->getMemberLimit());
    }

    public function testSetPendingJoinRequestCount()
    {
        $item = new ChatInviteLink();
        $item->setPendingJoinRequestCount(15);
        $this->assertEquals(15, $item->getPendingJoinRequestCount());
    }

    public function testGetPendingJoinRequestCount()
    {
        $item = new ChatInviteLink();
        $item->setPendingJoinRequestCount(15);
        $this->assertEquals(15, $item->getPendingJoinRequestCount());
    }
}
