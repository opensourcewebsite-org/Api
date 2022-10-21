<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChatPhoto;

class ChatTest extends TestCase
{
    public function testFromResponseGroupChat()
    {
        $item = Chat::fromResponse(array(
            'id' => 1,
            'type' => 'group',
            'title' => 'test chat'
        ));

        $this->assertInstanceOf('\TelegramBot\Api\Types\Chat', $item);
        $this->assertEquals(1, $item->getId());
        $this->assertEquals('test chat', $item->getTitle());
    }

    public function testSetId()
    {
        $chat = new Chat();
        $chat->setId(1);
        $this->assertEquals(1, $chat->getId());
    }

    public function testSet64bitId()
    {
        $chat = new Chat();
        $chat->setId(2147483648);
        $this->assertEquals(2147483648, $chat->getId());
    }

    public function testGetId()
    {
        $chat = new Chat();
        $chat->setId(1);
        $this->assertEquals(1, $chat->getId());
    }

    public function testSetType()
    {
        $chat = new Chat();
        $chat->setType('private');
        $this->assertEquals('private', $chat->getType());
    }

    public function testGetType()
    {
        $chat = new Chat();
        $chat->setType('private');
        $this->assertEquals('private', $chat->getType());
    }

    public function testSetTitle()
    {
        $chat = new Chat();
        $chat->setTitle('test chat');
        $this->assertEquals('test chat', $chat->getTitle());
    }

    public function testGetTitle()
    {
        $chat = new Chat();
        $chat->setTitle('test chat');
        $this->assertEquals('test chat', $chat->getTitle());
    }

    public function testSetUsername()
    {
        $chat = new Chat();
        $chat->setUsername('iGusev');
        $this->assertEquals('iGusev', $chat->getUsername());
    }

    public function testGetUsername()
    {
        $chat = new Chat();
        $chat->setUsername('iGusev');
        $this->assertEquals('iGusev', $chat->getUsername());
    }

    public function testSetFirstName()
    {
        $chat = new Chat();
        $chat->setFirstName('Ilya');
        $this->assertEquals('Ilya', $chat->getFirstName());
    }

    public function testGetFirstName()
    {
        $chat = new Chat();
        $chat->setFirstName('Ilya');
        $this->assertEquals('Ilya', $chat->getFirstName());
    }

    public function testSetLastName()
    {
        $chat = new Chat();
        $chat->setLastName('Gusev');
        $this->assertEquals('Gusev', $chat->getLastName());
    }

    public function testGetLastName()
    {
        $chat = new Chat();
        $chat->setLastName('Gusev');
        $this->assertEquals('Gusev', $chat->getLastName());
    }

    public function testSetPhoto()
    {
        $chat = new Chat();
        $photo = ChatPhoto::fromResponse([
            'small_file_id' => 'small_file_id',
            'big_file_id' => 'big_file_id'
        ]);
        $chat->setPhoto($photo);
        $this->assertEquals($photo, $chat->getPhoto());
    }

    public function testGetPhoto()
    {
        $chat = new Chat();
        $photo = ChatPhoto::fromResponse([
            'small_file_id' => 'small_file_id',
            'big_file_id' => 'big_file_id'
        ]);
        $chat->setPhoto($photo);
        $this->assertEquals($photo, $chat->getPhoto());
    }

    public function testSetBio()
    {
        $chat = new Chat();
        $chat->setBio('PHP Telegram Bot API');
        $this->assertEquals('PHP Telegram Bot API', $chat->getBio());
    }

    public function testGetBio()
    {
        $chat = new Chat();
        $chat->setBio('PHP Telegram Bot API');
        $this->assertEquals('PHP Telegram Bot API', $chat->getBio());
    }

    public function testSetHasPrivateForwards()
    {
        $chat = new Chat();
        $chat->setHasPrivateForwards(true);
        $this->assertEquals(true, $chat->getHasPrivateForwards());
    }

    public function testGetHasPrivateForwards()
    {
        $chat = new Chat();
        $chat->setHasPrivateForwards(true);
        $this->assertEquals(true, $chat->getHasPrivateForwards());
    }

    public function testSetHasRestrictedVoiceAndVideoMessages()
    {
        $chat = new Chat();
        $chat->setHasRestrictedVoiceAndVideoMessages(true);
        $this->assertEquals(true, $chat->getHasRestrictedVoiceAndVideoMessages());
    }

    public function testGetHasRestrictedVoiceAndVideoMessages()
    {
        $chat = new Chat();
        $chat->setHasRestrictedVoiceAndVideoMessages(true);
        $this->assertEquals(true, $chat->getHasRestrictedVoiceAndVideoMessages());
    }

    public function testGetJoinToSendMessages()
    {
        $chat = new Chat();
        $chat->setJoinToSendMessages(true);
        $this->assertEquals(true, $chat->getJoinToSendMessages());
    }

    public function testSetJoinToSendMessages()
    {
        $chat = new Chat();
        $chat->setJoinToSendMessages(true);
        $this->assertEquals(true, $chat->getJoinToSendMessages());
    }

    public function testGetJoinByRequest()
    {
        $chat = new Chat();
        $chat->setJoinByRequest(true);
        $this->assertEquals(true, $chat->getJoinByRequest());
    }

    public function testSetJoinByRequest()
    {
        $chat = new Chat();
        $chat->setJoinByRequest(true);
        $this->assertEquals(true, $chat->getJoinByRequest());
    }

    public function testSetMessageAutoDeleteTime()
    {
        $chat = new Chat();
        $chat->setMessageAutoDeleteTime(123456);
        $this->assertEquals(123456, $chat->getMessageAutoDeleteTime());
    }

    public function testGetMessageAutoDeleteTime()
    {
        $chat = new Chat();
        $chat->setMessageAutoDeleteTime(123456);
        $this->assertEquals(123456, $chat->getMessageAutoDeleteTime());
    }

    public function testGetHasProtectedContent()
    {
        $chat = new Chat();
        $chat->setHasProtectedContent(true);
        $this->assertEquals(true, $chat->getHasProtectedContent());
    }

    public function testSetHasProtectedContent()
    {
        $chat = new Chat();
        $chat->setHasProtectedContent(true);
        $this->assertEquals(true, $chat->getHasProtectedContent());
    }

    public function testSetDescriptions()
    {
        $chat = new Chat();
        $chat->setDescription('description');
        $this->assertEquals('description', $chat->getDescription());
    }

    public function testGetDescription()
    {
        $chat = new Chat();
        $chat->setDescription('description');
        $this->assertEquals('description', $chat->getDescription());
    }

    public function testFromResponseUser()
    {
        $item = Chat::fromResponse(array(
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
            'type' => 'private',
            'bio' => 'PHP Telegram Bot API'
        ));

        $this->assertInstanceOf('\TelegramBot\Api\Types\Chat', $item);
        $this->assertEquals(123456, $item->getId());
        $this->assertEquals('Ilya', $item->getFirstName());
        $this->assertEquals('Gusev', $item->getLastName());
        $this->assertEquals('iGusev', $item->getUsername());
        $this->assertEquals('PHP Telegram Bot API', $item->getBio());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetIdException1()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $chat = new Chat();
        $chat->setId([]);
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetIdException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $chat = new Chat();
        $chat->setId(null);
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $chat = Chat::fromResponse(array(
            'id' => 1
        ));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException3()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $chat = Chat::fromResponse(array(
            'type' => 'private'
        ));
    }
}
