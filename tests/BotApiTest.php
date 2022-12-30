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

        $result = $botapi->getStickerSet('stickerSetName');
        $this->assertInstanceOf('\TelegramBot\Api\Types\StickerSet', $result);
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

        foreach ($result as $key => $item) {
            $this->assertInstanceOf('\TelegramBot\Api\Types\Sticker', $item);
        }
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
        $this->assertInstanceOf('\TelegramBot\Api\Types\File', $result);
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
        $this->assertEquals($result, true);
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

        $result = $botapi->addStickerToSet(256, 'stickerSetName', 'emojis');
        $this->assertEquals($result, true);
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

        $result = $botapi->createForumTopic(256, 'Topic Name', 16766590);
        $this->assertInstanceOf('\TelegramBot\Api\Types\ForumTopic', $result);
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

    public function testCloseForumTopic()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('closeForumTopic', ['chat_id' => 512, 'message_thread_id' => 256])
               ->willReturn(true);

        $result = $botapi->closeForumTopic(512, 256);
        $this->assertEquals(true, $result);
    }

    public function testReopenForumTopic()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('reopenForumTopic', ['chat_id' => 512, 'message_thread_id' => 256])
               ->willReturn(true);

        $result = $botapi->reopenForumTopic(512, 256);
        $this->assertEquals($result, true);
    }

    public function testDeleteForumTopic()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('deleteForumTopic', ['chat_id' => 512, 'message_thread_id' => 256])
               ->willReturn(true);

        $result = $botapi->deleteForumTopic(512, 256);
        $this->assertEquals($result, true);
    }

    public function testUnpinAllForumTopicMessages()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('unpinAllForumTopicMessages', ['chat_id' => 512, 'message_thread_id' => 256])
               ->willReturn(true);

        $result = $botapi->unpinAllForumTopicMessages(512, 256);
        $this->assertEquals($result, true);
    }

    public function testGetForumTopicIconStickers()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['TestToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('getForumTopicIconStickers')
               ->willReturn([[
                   'file_id' => 'sticker_file_id',
                   'file_unique_id' => 'sticker_file_unique_id',
                   'type' => 'regular',
                   'width' => 512,
                   'height' => 256,
                   'is_animated' => false,
                   'is_video' => false,
               ]]);

        $result = $botapi->getForumTopicIconStickers();
        $this->assertIsArray($result);

        foreach ($result as $key => $item) {
            $this->assertInstanceOf('\TelegramBot\Api\Types\Sticker', $item);
        }
    }

    public function testSendPhoto()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('sendPhoto', [
                   'chat_id' => 256,
                   'photo' => 'photo_id',
                   'message_thread_id' => null,
                   'caption' => null,
                   'reply_to_message_id' => null,
                   'reply_markup' => null,
                   'disable_notification' => false,
                   'parse_mode' => null,
                   'has_spoiler' => false,
               ])
               ->willReturn(['message_id' => 266, 'date' => 512,'chat' => ['id' => 256, 'type' => 'private']]);

        $result = $botapi->sendPhoto(256, 'photo_id');
    }

    public function testSendVideo()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['TestToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('sendVideo', [
                   'chat_id' => 256,
                   'video' => 'video_id',
                   'message_thread_id' => null,
                   'duration' => null,
                   'caption' => null,
                   'reply_to_message_id' => null,
                   'reply_markup' => null,
                   'disable_notification' => false,
                   'supports_streaming' => false,
                   'parse_mode' => null,
                   'has_spoiler' => false,
               ])
               ->willReturn(['message_id' => 266, 'date' => 512, 'chat' => ['id' => 256, 'type' => 'private']]);

        $result = $botapi->sendVideo(256, 'video_id');
    }

    public function testSendAnimation()
    {
        $botapi = $this->getMockBuilder(BotApi::class)
                       ->setMethods(['call'])
                       ->enableOriginalConstructor()
                       ->setConstructorArgs(['testToken'])
                       ->getMock();

        $botapi->expects($this->once())
               ->method('call')
               ->with('sendAnimation', [
                   'chat_id' => 256,
                   'animation' => 'animation_id',
                   'message_thread_id' => null,
                   'duration' => null,
                   'caption' => null,
                   'reply_to_message_id' => null,
                   'reply_markup' => null,
                   'disable_notification' => false,
                   'parse_mode' => null,
                   'has_spoiler' => false,
               ])
               ->willReturn(['message_id' => 256, 'date' => 512, 'chat' => ['id' => 256, 'type' => 'private']]);

        $result = $botapi->sendAnimation(256, 'animation_id');
    }
}
