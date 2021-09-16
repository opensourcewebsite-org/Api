<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\PhotoSize;

class PhotoSizeTest extends TestCase
{
    public function testSetFileId()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileId('testfileId');
        $this->assertEquals('testfileId', $photoSize->getFileId());
    }

    public function testGetFileId()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileId('testfileId');
        $this->assertEquals('testfileId', $photoSize->getFileId());
    }

    public function testSetWidth()
    {
        $photoSize = new PhotoSize();
        $photoSize->setWidth(1);
        $this->assertEquals(1, $photoSize->getWidth());
    }

    public function testGetWidth()
    {
        $photoSize = new PhotoSize();
        $photoSize->setWidth(2);
        $this->assertEquals(2, $photoSize->getWidth());
    }

    public function testSetHeight()
    {
        $photoSize = new PhotoSize();
        $photoSize->setHeight(3);
        $this->assertEquals(3, $photoSize->getHeight());
    }

    public function testGetHeight()
    {
        $photoSize = new PhotoSize();
        $photoSize->setHeight(4);
        $this->assertEquals(4, $photoSize->getHeight());
    }

    public function testSetFileSize()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileSize(5);
        $this->assertEquals(5, $photoSize->getFileSize());
    }

    public function testGetFileSize()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileSize(6);
        $this->assertEquals(6, $photoSize->getFileSize());
    }

    public function testFromResponse()
    {
        $photoSize = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\PhotoSize', $photoSize);
        $this->assertEquals('testFileId1', $photoSize->getFileId());
        $this->assertEquals(1, $photoSize->getWidth());
        $this->assertEquals(2, $photoSize->getHeight());
        $this->assertEquals(3, $photoSize->getFileSize());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setFileSize('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetHeightException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setHeight('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetWidthException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setWidth('s');
    }
}
