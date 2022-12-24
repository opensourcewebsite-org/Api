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

    public function testUploadStickerFile()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('uploadStickerFile', ['user_id' => 564, 'png_sticker' => 'CURLFile'])
               ->willReturn(['file_id' => 'file_id', 'file_size' => 256, 'file_path' => 'path']);

        $result = $botapi->uploadStickerFile(564, 'CURLFile');
    }

    public function testCreateNewStickerSet()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('createNewStickerSet', [
                   'user_id' => 256,
                   'name' => 'stickerSetName',
                   'title' => 'stickerSetTitle',
                   'emojis' => 'emoji',
                   'png_sticker' => null,
                   'tgs_sticker' => null,
                   'webm_sticker' => null,
                   'sticker_type' => null,
                   'mask_position' => null,
               ])
               ->willReturn(true);


        $result = $botapi->createNewStickerSet(256, 'stickerSetName', 'stickerSetTitle', 'emoji');
    }

    public function testAddStickerToSet()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('addStickerToSet', [
                   'user_id' => 256,
                   'name' => 'stickerSetName',
                   'emojis' => 'emojis',
                   'png_sticker' => null,
                   'tgs_sticker' => null,
                   'webm_sticker' => null,
                   'mask_position' => null,
               ])
               ->willReturn(true);

        $botapi->addStickerToSet(256, 'stickerSetName', 'emojis');
    }

    public function testSetStickerPositionInSet()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('setStickerPositionInSet', [
                   'sticker' => 'sticker_id',
                   'position' => 256,
               ])
               ->willReturn(true);

        $botapi->setStickerPositionInSet('sticker_id', 256);
    }

    public function testDeleteStickerFromSet()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('deleteStickerFromSet', ['sticker' => 'sticker-identifier'])
               ->willReturn(true);

        $botapi->deleteStickerFromSet('sticker-identifier');
    }

    public function testSetStickerSetThumb()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('setStickerSetThumb', ['name' => 'thumbName', 'user_id' => 256, 'thumb' => null])
               ->willReturn(true);

        $botapi->setStickerSetThumb('thumbName', 256);
    }

    public function testCreateForumTopic()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('createForumTopic', [
                   'chat_id' => 256,
                   'name' => 'Topic Name',
                   'icon_color' => 16766590,
                   'icon_custom_emoji_id' => null,
               ])
               ->willReturn([
                   'message_thread_id' => 256,
                   'name' => 'Topic Name',
                   'icon_color' => 16766590,
               ]);

        $botapi->createForumTopic(256, 'Topic Name', 16766590);
    }

    public function testEditForumTopic()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('editForumTopic', [
                   'chat_id' => 256,
                   'message_thread_id' => 512,
                   'name' => 'Topic Name',
                   'icon_custom_emoji_id' => 'icon_emoji_id',
               ])
               ->willReturn(true);

        $botapi->editForumTopic(256, 512, 'Topic Name', 'icon_emoji_id');
    }
}
