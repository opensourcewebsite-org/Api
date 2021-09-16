<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Audio;

class AudioTest extends TestCase
{
    public function testSetFileId()
    {
        $item = new Audio();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testGetFileId()
    {
        $item = new Audio();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testSetDuration()
    {
        $item = new Audio();
        $item->setDuration(1);
        $this->assertEquals(1, $item->getDuration());
    }

    public function testGetDuration()
    {
        $item = new Audio();
        $item->setDuration(1);
        $this->assertEquals(1, $item->getDuration());
    }

    public function testSetPerformer()
    {
        $item = new Audio();
        $item->setPerformer('test');
        $this->assertEquals('test', $item->getPerformer());
    }

    public function testGetPerformer()
    {
        $item = new Audio();
        $item->setPerformer('test');
        $this->assertEquals('test', $item->getPerformer());
    }

    public function testSetTitle()
    {
        $item = new Audio();
        $item->setTitle('test');
        $this->assertEquals('test', $item->getTitle());
    }

    public function testGetTitle()
    {
        $item = new Audio();
        $item->setTitle('test');
        $this->assertEquals('test', $item->getTitle());
    }

    public function testSetFileSize()
    {
        $item = new Audio();
        $item->setFileSize(5);
        $this->assertEquals(5, $item->getFileSize());
    }

    public function testGetFileSize()
    {
        $item = new Audio();
        $item->setFileSize(6);
        $this->assertEquals(6, $item->getFileSize());
    }

    public function testSetMimeType()
    {
        $item = new Audio();
        $item->setMimeType('audio/mp3');
        $this->assertEquals('audio/mp3', $item->getMimeType());
    }

    public function testGetMimeType()
    {
        $item = new Audio();
        $item->setMimeType('audio/mp3');
        $this->assertEquals('audio/mp3', $item->getMimeType());
    }

    public function testFromResponse()
    {
        $item = Audio::fromResponse(array(
            'file_id' => 'testFileId1',
            'duration' => 1,
            'performer' => 'testperformer',
            'title' => 'testtitle',
            'mime_type' => 'audio/mp3',
            'file_size' => 3
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\Audio', $item);
        $this->assertEquals('testFileId1', $item->getFileId());
        $this->assertEquals(1, $item->getDuration());
        $this->assertEquals('testperformer', $item->getPerformer());
        $this->assertEquals('testtitle', $item->getTitle());
        $this->assertEquals('audio/mp3', $item->getMimeType());
        $this->assertEquals(3, $item->getFileSize());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Audio::fromResponse(array(
            'duration' => 1,
            'mime_type' => 'audio/mp3',
            'file_size' => 3
        ));
    }
    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Audio::fromResponse(array(
            'file_id' => 'testFileId1',
            'mime_type' => 'audio/mp3',
            'file_size' => 3
        ));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetDurationException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Audio();
        $item->setDuration('s');
    }
    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Audio();
        $item->setFileSize('s');
    }
}
