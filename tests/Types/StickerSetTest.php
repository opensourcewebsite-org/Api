<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ArrayOfSticker;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\StickerSet;

class StickerSetTest extends TestCase
{
    public function testGetName()
    {
        $item = new StickerSet();
        $item->setName('sticker_set_name');
        $this->assertEquals('sticker_set_name', $item->getName());
    }

    public function testSetName()
    {
        $item = new StickerSet();
        $item->setName('StickerSet');
        $this->assertEquals('StickerSet', $item->getName());
    }

    public function testGetTitle()
    {
        $item = new StickerSet();
        $item->setTitle('stickerTitle');
        $this->assertEquals('stickerTitle', $item->getTitle());
    }

    public function testSetTitle()
    {
        $item = new StickerSet();
        $item->setTitle('setTitle');
        $this->assertEquals('setTitle', $item->getTitle());
    }

    public function testGetStickerType()
    {
        $item = new StickerSet();
        $item->setStickerType('custom_emoji');
        $this->assertEquals('custom_emoji', $item->getStickerType());
    }

    public function testSetStickerType()
    {
        $item = new StickerSet();
        $item->setStickerType('regular');
        $this->assertEquals('regular', $item->getStickerType());
    }

    public function testIsAnimated()
    {
        $item = new StickerSet();
        $item->setIsAnimated(false);
        $this->assertEquals(false, $item->isAnimated());
    }

    public function testSetIsAnimated()
    {
        $item = new StickerSet();
        $item->setIsAnimated(true);
        $this->assertEquals(true, $item->isAnimated());
    }

    public function testIsVideo()
    {
        $item = new StickerSet();
        $item->setIsVideo(false);
        $this->assertEquals(false, $item->isVideo());
    }

    public function testSetIsVideo()
    {
        $item = new StickerSet();
        $item->setIsVideo(true);
        $this->assertEquals(true, $item->isVideo());
    }

    public function testGetStickers()
    {
        $item = new StickerSet();
        $stickers = ArrayOfSticker::fromResponse([
            array(
                'file_id' => 'id',
                'file_unique_id' => 'unique_id',
                'type' => 'regular',
                'width' => 255,
                'height' => 512,
                'is_animated' => true,
                'is_video' => true,
            ),
        ]);
        $item->setStickers($stickers);
        $this->assertEquals($stickers, $item->getStickers());
    }

    public function testSetStickers()
    {
        $item = new StickerSet();
        $stickers = ArrayOfSticker::fromResponse([
            array(
                'file_id' => 'id',
                'file_unique_id' => 'unique_id',
                'type' => 'regular',
                'width' => 255,
                'height' => 512,
                'is_animated' => false,
                'is_video' => false,
            ),
        ]);
        $item->setStickers($stickers);
        $this->assertEquals($stickers, $item->getStickers());
    }

    public function testGetThumb()
    {
        $item = new StickerSet();
        $photo = PhotoSize::fromResponse([
            'file_id' => 'id',
            'width' => 512,
            'height' => 255,
        ]);
        $item->setThumb($photo);
        $this->assertEquals($photo, $item->getThumb());
    }

    public function testSetThumb()
    {
        $item = new StickerSet();
        $photo = PhotoSize::fromResponse([
            'file_id' => 'id',
            'width' => 512,
            'height' => 255,
        ]);
        $item->setThumb($photo);
        $this->assertEquals($photo, $item->getThumb());
    }

    public function testFromResponse()
    {
        $actual = StickerSet::fromResponse(array(
            'name' => 'stickerSet',
            'title' => 'stickerTitle',
            'sticker_type' => 'regular',
            'is_animated' => false,
            'is_video' => false,
            'stickers' => array(
                array(
                    'file_id' => 'id',
                    'file_unique_id' => 'unique_id',
                    'type' => 'regular',
                    'width' => 256,
                    'height' => 512,
                    'is_animated' => false,
                    'is_video' => false,
                ),
            ),
        ));
        $expected = new StickerSet();
        $expected->setName('stickerSet');
        $expected->setTitle('stickerTitle');
        $expected->setStickerType('regular');
        $expected->setIsAnimated(false);
        $expected->setIsVideo(false);
        $expected->setStickers(ArrayOfSticker::fromResponse([
            array(
               'file_id' => 'id',
               'file_unique_id' => 'unique_id',
               'type' => 'regular',
               'width' => 256,
               'height' => 512,
               'is_animated' => false,
               'is_video' => false,
            ),
        ]));
        $this->assertEquals($actual, $expected);
    }
}
