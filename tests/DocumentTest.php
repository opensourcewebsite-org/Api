<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Document;
use TelegramBot\Api\Types\PhotoSize;

class DocumentTest extends TestCase
{
    public function testSetFileId()
    {
        $item = new Document();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testGetFileId()
    {
        $item = new Document();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testSetThumb()
    {
        $item = new Document();
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
        $item = new Document();
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

    public function testSetFileName()
    {
        $item = new Document();
        $item->setFileName('testfileName');
        $this->assertEquals('testfileName', $item->getFileName());
    }

    public function testGetFileName()
    {
        $item = new Document();
        $item->setFileName('testfileName');
        $this->assertEquals('testfileName', $item->getFileName());
    }

    public function testSetFileSize()
    {
        $item = new Document();
        $item->setFileSize(5);
        $this->assertEquals(5, $item->getFileSize());
    }

    public function testGetFileSize()
    {
        $item = new Document();
        $item->setFileSize(6);
        $this->assertEquals(6, $item->getFileSize());
    }

    public function testSetMimeType()
    {
        $item = new Document();
        $item->setMimeType('audio/mp3');
        $this->assertEquals('audio/mp3', $item->getMimeType());
    }

    public function testGetMimeType()
    {
        $item = new Document();
        $item->setMimeType('audio/mp3');
        $this->assertEquals('audio/mp3', $item->getMimeType());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Document();
        $item->setFileSize('s');
    }

    public function testFromResponse()
    {
        $item = Document::fromResponse(array(
            'file_id' => 'testFileId1',
            'file_name' => 'testFileName',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
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
        $this->assertInstanceOf('\TelegramBot\Api\Types\Document', $item);
        $this->assertEquals('testFileId1', $item->getFileId());
        $this->assertEquals('testFileName', $item->getFileName());
        $this->assertEquals('audio/mp3', $item->getMimeType());
        $this->assertEquals(3, $item->getFileSize());
        $this->assertEquals($thumb, $item->getThumb());
        $this->assertInstanceOf('\TelegramBot\Api\Types\PhotoSize', $item->getThumb());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = Document::fromResponse(array(
            'file_name' => 'testFileName',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
            'thumb' => array(
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            )
        ));
    }
}
