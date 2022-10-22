<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatAdministratorRights;

class ChatAdministratorRightsTest extends TestCase
{
    public function testIsAnonymous()
    {
        $item = new ChatAdministratorRights();
        $item->setIsAnonymous(true);
        $this->assertEquals(true, $item->isAnonymous());
    }

    public function testSetIsAnonymous()
    {
        $item = new ChatAdministratorRights();
        $item->setIsAnonymous(true);
        $this->assertEquals(true, $item->isAnonymous());
    }

    public function testCanManageChat()
    {
        $item = new ChatAdministratorRights();
        $item->setCanManageChat(true);
        $this->assertEquals(true, $item->canManageChat());
    }

    public function testSetCanManageChat()
    {
        $item = new ChatAdministratorRights();
        $item->setCanManageChat(false);
        $this->assertEquals(false, $item->canManageChat());
    }

    public function testCanDeleteMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanDeleteMessages(true);
        $this->assertEquals(true, $item->canDeleteMessages());
    }

    public function testSetCanDeleteMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanDeleteMessages(true);
        $this->assertEquals(true, $item->canDeleteMessages());
    }

    public function testCanManageVideoChats()
    {
        $item = new ChatAdministratorRights();
        $item->setCanManageVideoChats(false);
        $this->assertEquals(false, $item->canManageVideoChats());
    }

    public function testSetCanManageVideoChats()
    {
        $item = new ChatAdministratorRights();
        $item->setCanManageVideoChats(true);
        $this->assertEquals(true, $item->canManageVideoChats());
    }

    public function testCanRestrictMembers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanRestrictMembers(false);
        $this->assertEquals(false, $item->canRestrictMembers());
    }

    public function testSetCanRestrictMembers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanRestrictMembers(true);
        $this->assertEquals(true, $item->canRestrictMembers());
    }

    public function testCanPromoteMembers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPromoteMembers(false);
        $this->assertEquals(false, $item->canPromoteMembers());
    }

    public function testSetCanPromoteMembers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPromoteMembers(true);
        $this->assertEquals(true, $item->canPromoteMembers());
    }

    public function testCanChangeInfo()
    {
        $item = new ChatAdministratorRights();
        $item->setCanChangeInfo(false);
        $this->assertEquals(false, $item->canChangeInfo());
    }

    public function testSetCanChangeInfo()
    {
        $item = new ChatAdministratorRights();
        $item->setCanChangeInfo(true);
        $this->assertEquals(true, $item->canChangeInfo());
    }

    public function testCanInviteUsers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanInviteUsers(false);
        $this->assertEquals(false, $item->canInviteUsers());
    }

    public function testSetCanInviteUsers()
    {
        $item = new ChatAdministratorRights();
        $item->setCanInviteUsers(false);
        $this->assertEquals(false, $item->canInviteUsers());
    }

    public function testCanPostMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPostMessages(false);
        $this->assertEquals(false, $item->canPostMessages());
    }

    public function testSetCanPostMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPostMessages(true);
        $this->assertEquals(true, $item->canPostMessages());
    }

    public function testCanEditMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanEditMessages(false);
        $this->assertEquals(false, $item->canEditMessages());
    }

    public function testSetCanEditMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanEditMessages(true);
        $this->assertEquals(true, $item->canEditMessages());
    }

    public function testCanPinMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPinMessages(false);
        $this->assertEquals(false, $item->canPinMessages());
    }

    public function testSetCanPinMessages()
    {
        $item = new ChatAdministratorRights();
        $item->setCanPinMessages(true);
        $this->assertEquals(true, $item->canPinMessages());
    }
}
