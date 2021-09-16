<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\Video;

class VideoTest extends TestCase
{
    public function testSetFileId()
    {
        $item = new Video();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testGetFileId()
    {
        $item = new Video();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testSetDuration()
    {
        $item = new Video();
        $item->setDuration(1);
        $this->assertEquals(1, $item->getDuration());
    }

    public function testGetDuration()
    {
        $item = new Video();
        $item->setDuration(1);
        $this->assertEquals(1, $item->getDuration());
    }

    public function testSetFileSize()
    {
        $item = new Video();
        $item->setFileSize(5);
        $this->assertEquals(5, $item->getFileSize());
    }

    public function testGetFileSize()
    {
        $item = new Video();
        $item->setFileSize(6);
        $this->assertEquals(6, $item->getFileSize());
    }

    public function testSetMimeType()
    {
        $item = new Video();
        $item->setMimeType('video/mp4');
        $this->assertEquals('video/mp4', $item->getMimeType());
    }

    public function testGetMimeType()
    {
        $item = new Video();
        $item->setMimeType('video/mp4');
        $this->assertEquals('video/mp4', $item->getMimeType());
    }

    public function testSetThumb()
    {
        $item = new Video();
        $thumb = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $item->setThumb($thumb);
        $this->assertEquals($thumb, $item->getThumb());
    }

    public function testGetThumb()
    {
        $item = new Video();
        $thumb = PhotoSize::fromResponse(array(
            "file_id" => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $item->setThumb($thumb);
        $this->assertEquals($thumb, $item->getThumb());
        $this->assertInstanceOf('\TelegramBot\Api\Types\PhotoSize', $item->getThumb());
    }

    public function testSetWidth()
    {
        $item = new Video();
        $item->setWidth(1);
        $this->assertEquals(1, $item->getWidth());
    }

    public function testGetWidth()
    {
        $item = new Video();
        $item->setWidth(2);
        $this->assertEquals(2, $item->getWidth());
    }

    public function testSetHeight()
    {
        $item = new Video();
        $item->setHeight(3);
        $this->assertEquals(3, $item->getHeight());
    }

    public function testGetHeight()
    {
        $item = new Video();
        $item->setHeight(4);
        $this->assertEquals(4, $item->getHeight());
    }

    public function testFromResponse()
    {
        $item = Video::fromResponse(array(
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
        $thumb = PhotoSize::fromResponse(array(
            'file_id' => 'testFileId1',
            'width' => 5,
            'height' => 6,
            'file_size' => 7
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\Video', $item);
        $this->assertEquals('testFileId1', $item->getFileId());
        $this->assertEquals(1, $item->getWidth());
        $this->assertEquals(2, $item->getHeight());
        $this->assertEquals(3, $item->getDuration());
        $this->assertEquals('video/mp4', $item->getMimeType());
        $this->assertEquals(4, $item->getFileSize());
        $this->assertEquals($thumb, $item->getThumb());
        $this->assertInstanceOf('\TelegramBot\Api\Types\PhotoSize', $item->getThumb());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetHeightException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Video();
        $item->setHeight('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetWidthException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Video();
        $item->setWidth('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetDurationException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Video();
        $item->setDuration('s');
    }
    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Video();
        $item->setFileSize('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Video::fromResponse(array(
            'width' => 1,
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
    }
    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Video::fromResponse(array(
            'file_id' => 'testFileId1',
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException3()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Video::fromResponse(array(
            'file_id' => 'testFileId1',
            'width' => 1,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException4()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Video::fromResponse(array(
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
    }
}
