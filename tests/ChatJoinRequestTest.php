<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChatInviteLink;
use TelegramBot\Api\Types\ChatJoinRequest;
use TelegramBot\Api\Types\User;

class ChatJoinRequestTest extends TestCase
{
    public function testGetChat()
    {
        $item = new ChatJoinRequest();
        $item->setChat(Chat::fromResponse([
            'id' => 255,
            'type' => 'private',
        ]));
        $this->assertEquals(
            Chat::fromResponse([
                'id' => 255,
                'type' => 'private',
            ]),
            $item->getChat(),
        );
    }

    public function testSetChat()
    {
        $item = new ChatJoinRequest();
        $chat = Chat::fromResponse([
            'id' => 512,
            'type' => 'private',
        ]);
        $item->setChat($chat);
        $this->assertEquals(
            Chat::fromResponse([
                'id' => 512,
                'type' => 'private',
            ]),
            $item->getChat(),
        );
    }

    public function testGetFrom()
    {
        $item = new ChatJoinRequest();
        $item->setFrom(User::fromResponse([
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
            $item->getFrom(),
        );
    }

    public function testSetFrom()
    {
        $item = new ChatJoinRequest();
        $user = User::fromResponse([
            'id' => 255,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ]);
        $item->setFrom($user);
        $this->assertEquals(
            User::fromResponse([
                'id' => 255,
                'is_bot' => false,
                'first_name' => 'bakteria'
            ]),
            $item->getFrom(),
        );
    }

    public function testGetDate()
    {
        $item = new ChatJoinRequest();
        $item->setDate(512);
        $this->assertEquals(512, $item->getDate());
    }

    public function testSetDate()
    {
        $item = new ChatJoinRequest();
        $item->setDate(255);
        $this->assertEquals(255, $item->getDate());
    }

    public function testGetBio()
    {
        $item = new ChatJoinRequest();
        $item->setBio("a telegram bio");
        $this->assertEquals(
            "a telegram bio",
            $item->getBio(),
        );
    }

    public function testSetBio()
    {
        $item = new ChatJoinRequest();
        $item->setBio("a telegram bio");
        $this->assertEquals(
            "a telegram bio",
            $item->getBio(),
        );
    }

    public function testGetInviteLink()
    {
        $item = new ChatJoinRequest();
        $link = ChatInviteLink::fromResponse([
            'invite_link' => 'http://url.com',
            'creator' =>  [
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ],
        ]);
        $item->setInviteLink($link);
        $this->assertEquals(
            ChatInviteLink::fromResponse([
                'invite_link' => 'http://url.com',
                'creator' => [
                    'id' => 512,
                    'is_bot' => false,
                    'first_name' => 'bakteria',
                ],
            ]),
            $item->getInviteLink(),
        );
    }

    public function testSetInviteLink()
    {
        $item = new ChatJoinRequest();
        $link = ChatInviteLink::fromResponse([
            'invite_link' => 'http://url.com',
            'creator' =>  [
                'id' => 512,
                'is_bot' => false,
                'first_name' => 'bakteria',
            ],
        ]);
        $item->setInviteLink($link);
        $this->assertEquals(
            ChatInviteLink::fromResponse([
                'invite_link' => 'http://url.com',
                'creator' => [
                    'id' => 512,
                    'is_bot' => false,
                    'first_name' => 'bakteria',
                ],
            ]),
            $item->getInviteLink(),
        );
    }

    public function testUserChatId()
    {
        $item = new ChatJoinRequest();
        $item->setUserChatId(1);
        $this->assertEquals(1, $item->getUserChatId());
    }

    public function testFromResponse()
    {
        $chat = [
            'id' => 512,
            'type' => 'private',
        ];
        $from = [
            'id' => 256,
            'is_bot' => false,
            'first_name' => 'bakteria',
        ];
        $actual = ChatJoinRequest::fromResponse([
            'chat' => $chat,
            'from' => $from,
            'user_chat_id' => 1,
            'date' => 256,
        ]);
        $expected = new ChatJoinRequest();
        $expected->setChat(Chat::fromResponse($chat));
        $expected->setFrom(User::fromResponse($from));
        $expected->setUserChatId(1);
        $expected->setDate(256);
        $this->assertEquals($actual, $expected);
    }
}
