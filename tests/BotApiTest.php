<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\ArrayOfUpdates;
use TelegramBot\Api\Types\Update;

class BotApiTest extends TestCase
{
    public function data()
    {
        return [
            [
                [
                    [
                        'update_id' => 123456,
                        'message' => [
                            'message_id' => 13948,
                            'from' => [
                                'id' => 123,
                                'is_bot' => false,
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'chat' => [
                                'id' => 123,
                                'type' => 'private',
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'date' => 1440169809,
                            'text' => 'testText',
                        ],
                    ],
                    [
                        'update_id' => 123456,
                        'message' => [
                            'message_id' => 13948,
                            'from' => [
                                'id' => 123,
                                'is_bot' => false,
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'chat' => [
                                'id' => 123,
                                'type' => 'private',
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'date' => 1440169809,
                            'text' => '/testcommand',
                        ],
                    ],
                    [
                        'update_id' => 376262206,
                        'inline_query' => [
                            'id' => '248571229377660054',
                            'from' => [
                                'id' => 123,
                                'is_bot' => false,
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'query' => 'h g',
                            'offset' => '',
                        ],

                    ],
                ],
            ],
            [
                [
                    [
                        'update_id' => 123456,
                        'message' => [
                            'message_id' => 13948,
                            'from' => [
                                'id' => 123,
                                'is_bot' => false,
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'chat' => [
                                'id' => 123,
                                'type' => 'private',
                                'first_name' => 'Ilya',
                                'last_name' => 'Gusev',
                                'username' => 'iGusev',
                            ],
                            'date' => 1440169809,
                            'text' => '/testcommand with attrs',
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @param Update[] $updates
     *
     * @dataProvider data
     */
    public function testGetUpdates($updates)
    {
        $mock = $this->getMockBuilder('\TelegramBot\Api\BotApi')
            ->setMethods(['call'])
            ->enableOriginalConstructor()
            ->setConstructorArgs(['testToken'])
            ->getMock();
        $mock->expects($this->once())->method('call')->willReturn($updates);
        $expectedResult = ArrayOfUpdates::fromResponse($updates);
        $result = $mock->getUpdates();
        $this->assertIsArray($result);
        $this->assertEquals($expectedResult, $result);
        foreach ($result as $key => $item) {
            $this->assertInstanceOf('\TelegramBot\Api\Types\Update', $item);
            $this->assertEquals($expectedResult[$key], $item);
        }
    }

    public function testGetStickerSet()
    {
        $botapi = $this->getMockBuilder('\TelegramBot\Api\BotApi')
            ->setMethods(['call'])
            ->enableOriginalConstructor()
            ->setConstructorArgs(['testToken'])
            ->getMock();

        $botapi->expects($this->once())
            ->method('call')
            ->with('getStickerSet', ['name' => 'stickerSetName'])
            ->willReturn([
                'name' => 'sticker-set-name',
                'title' => 'sticker-set-title',
                'sticker_type' => 'sticker-set-type',
                'is_animated' => false,
                'is_video' => false,
                'stickers' => [],
            ]);

        $botapi->getStickerSet('stickerSetName');
    }

    public function testGetCustomEmojiStickers()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
            ->setMethods(['call'])
            ->enableOriginalConstructor()
            ->setConstructorArgs(['testToken'])
            ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('getCustomEmojiStickers', ['custom_emoji_ids' => ['emojiid1', 'emojiid2']])
               ->willReturn([[
                   'file_id' => 'file_id',
                   'file_unique_id' => 'unique_id',
                   'type' => 'sticker_type',
                   'width' => 512,
                   'height' => 512,
                   'is_animated' => false,
                   'is_video' => false,
               ]]);

        $result = $botapi->getCustomEmojiStickers(['emojiid1', 'emojiid2']);
        $this->assertIsArray($result);
    }
}
