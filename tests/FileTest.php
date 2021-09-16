<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\File;

class FileTest extends TestCase
{
    public function testSetFileId()
    {
        $item = new File();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testGetFileId()
    {
        $item = new File();
        $item->setFileId('testfileId');
        $this->assertEquals('testfileId', $item->getFileId());
    }

    public function testSetFileSize()
    {
        $item = new File();
        $item->setFileSize(5);
        $this->assertEquals(5, $item->getFileSize());
    }

    public function testGetFileSize()
    {
        $item = new File();
        $item->setFileSize(6);
        $this->assertEquals(6, $item->getFileSize());
    }

    public function testSetFilePath()
    {
        $item = new File();
        $item->setFilePath('testfilepath');
        $this->assertEquals('testfilepath', $item->getFilePath());
    }

    public function testGetFilePath()
    {
        $item = new File();
        $item->setFilePath('testfilepath');
        $this->assertEquals('testfilepath', $item->getFilePath());
    }

    public function testFromResponse()
    {
        $item = File::fromResponse(array(
            'file_id' => 'testFileId1',
            'file_size' => 3,
            'file_path' => 'testfilepath'
        ));
        $this->assertInstanceOf('\TelegramBot\Api\Types\File', $item);
        $this->assertEquals('testFileId1', $item->getFileId());
        $this->assertEquals(3, $item->getFileSize());
        $this->assertEquals('testfilepath', $item->getFilePath());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = File::fromResponse(array(
            'file_size' => 3,
            'file_path' => 'testfilepath'
        ));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetFileSizeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new File();
        $item->setFileSize('s');
    }
}
