<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\File;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\Sticker;

class StickerTest extends TestCase
{
    public function testSetFileId()
    {
        $sticker = new Sticker();
        $sticker->setFileId('testfileId');
        $this->assertEquals('testfileId', $sticker->getFileId());
    }

    public function testGetFileId()
    {
        $sticker = new Sticker();
        $sticker->setFileId('testfileId');
        $this->assertEquals('testfileId', $sticker->getFileId());
    }

    public function testSetWidth()
    {
        $sticker = new Sticker();
        $sticker->setWidth(1);
        $this->assertEquals(1, $sticker->getWidth());
    }

    public function testGetWidth()
    {
        $sticker = new Sticker();
        $sticker->setWidth(2);
        $this->assertEquals(2, $sticker->getWidth());
    }

    public function testSetHeight()
    {
        $sticker = new Sticker();
        $sticker->setHeight(3);
        $this->assertEquals(3, $sticker->getHeight());
    }

    public function testGetHeight()
    {
        $sticker = new Sticker();
        $sticker->setHeight(4);
        $this->assertEquals(4, $sticker->getHeight());
    }

    public function testSetFileSize()
    {
        $sticker = new Sticker();
        $sticker->setFileSize(5);
        $this->assertEquals(5, $sticker->getFileSize());
    }

    public function testGetFileSize()
    {
        $sticker = new Sticker();
        $sticker->setFileSize(6);
        $this->assertEquals(6, $sticker->getFileSize());
    }

    public function testSetThumb()
    {
        $sticker = new Sticker();
        $thumb = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $sticker->setThumb($thumb);
        $this->assertEquals($thumb, $sticker->getThumb());
    }

    public function testGetThumb()
    {
        $sticker = new Sticker();
        $thumb = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $sticker->setThumb($thumb);
        $this->assertEquals($thumb, $sticker->getThumb());
        $this->assertInstanceOf('\TelegramBot\Api\Types\PhotoSize', $sticker->getThumb());
    }

    public function testFromResponse()
    {
        $sticker = Sticker::fromResponse(array(
            "file_id" => 'testFileId1',
            'file_unique_id' => 'unique_id',
            'type' => 'regular',
            'width' => 1,
            'height' => 2,
            'is_animated' => false,
            'is_video' => false,
            'file_size' => 3,
            'thumb' => array(
                "file_id" => 'testFileId1',
                'width' => 1,
                'height' => 2,
                'file_size' => 3
            )
        ));
        $thumb = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\Sticker', $sticker);
        $this->assertEquals('testFileId1', $sticker->getFileId());
        $this->assertEquals(1, $sticker->getWidth());
        $this->assertEquals(2, $sticker->getHeight());
        $this->assertEquals(3, $sticker->getFileSize());
        $this->assertEquals($thumb, $sticker->getThumb());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Sticker();
        $item->setFileSize('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetHeightException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Sticker();
        $item->setHeight('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetWidthException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Sticker();
        $item->setWidth('s');
    }

    public function testGetFileUniqueId()
    {
        $item = new Sticker();
        $item->setFileUniqueId('unique');
        $this->assertEquals('unique', $item->getFileUniqueId());
    }

    public function testSetFileUniqueId()
    {
        $item = new Sticker();
        $item->setFileUniqueId('uniqueID');
        $this->assertEquals('uniqueID', $item->getFileUniqueId());
    }

    public function testSetType()
    {
        $item = new Sticker();
        $item->setType('regular');
        $this->assertEquals('regular', $item->getType());
    }

    public function testGetType()
    {
        $item = new Sticker();
        $item->setType('custom_emoji');
        $this->assertEquals('custom_emoji', $item->getType());
    }

    public function testIsAnimated()
    {
        $item = new Sticker();
        $item->setIsAnimated(false);
        $this->assertEquals(false, $item->isAnimated());
    }

    public function testSetIsAnimated()
    {
        $item = new Sticker();
        $item->setIsAnimated(true);
        $this->assertEquals(true, $item->isAnimated());
    }

    public function testIsVideo()
    {
        $item = new Sticker();
        $item->setIsVideo(false);
        $this->assertEquals(false, $item->isVideo());
    }

    public function testSetIsVideo()
    {
        $item = new Sticker();
        $item->SetIsVideo(false);
        $this->assertEquals(false, $item->isVideo());
    }

    public function testGetEmoji()
    {
        $item = new Sticker();
        $item->setEmoji('<emoji>');
        $this->assertEquals('<emoji>', $item->getEmoji());
    }

    public function testSetEmoji()
    {
        $item = new Sticker();
        $item->setEmoji('<emoji>');
        $this->assertEquals('<emoji>', $item->getEmoji());
    }

    public function testGetSetName()
    {
        $item = new Sticker();
        $item->setSetName('set_name');
        $this->assertEquals('set_name', $item->getSetName());
    }

    public function testSetSetName()
    {
        $item = new Sticker();
        $item->setSetName('set_name');
        $this->assertEquals('set_name', $item->getSetName());
    }

    public function testGetPremiumAnimation()
    {
        $item = new Sticker();
        $premiumAnimation = File::fromResponse([
            'file_id' => 'id',
        ]);
        $item->setPremiumAnimation($premiumAnimation);
        $this->assertEquals(
            File::fromResponse([
                'file_id' => 'id',
            ]),
            $item->getPremiumAnimation(),
        );
    }

    public function testGetCustomEmojiId()
    {
        $item = new Sticker();
        $item->setCustomEmojiId('custom_id');
        $this->assertEquals('custom_id', $item->getCustomEmojiId());
    }

    public function testSetCustomEmojiId()
    {
        $item = new Sticker();
        $item->setCustomEmojiId('custom_id');
        $this->assertEquals('custom_id', $item->getCustomEmojiId());
    }
}
