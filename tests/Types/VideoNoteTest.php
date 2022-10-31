<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\VideoNote;

class VideoNoteTest extends TestCase
{
    public function testGetFileId()
    {
        $item = new VideoNote();
        $item->setFileId('file_id');
        $this->assertEquals('file_id', $item->getFileId());
    }

    public function testSetFileId()
    {
        $item = new VideoNote();
        $item->setFileId('file_id');
        $this->assertEquals('file_id', $item->getFileId());
    }

    public function testGetFileUniqueId()
    {
        $item = new VideoNote();
        $item->setFileUniqueId('unique_id');
        $this->assertEquals('unique_id', $item->getFileUniqueId());
    }

    public function testSetFileUniqueId()
    {
        $item = new VideoNote();
        $item->setFileUniqueId('unique_id');
        $this->assertEquals('unique_id', $item->getFileUniqueId());
    }

    public function testGetLenght()
    {
        $item = new VideoNote();
        $item->setLength(512);
        $this->assertEquals(512, $item->getLength());
    }

    public function testSetLenght()
    {
        $item = new VideoNote();
        $item->setLength(255);
        $this->assertEquals(255, $item->getLength());
    }

    public function testGetDuration()
    {
        $item = new VideoNote();
        $item->setDuration(512);
        $this->assertEquals(512, $item->getDuration());
    }

    public function testSetDuration()
    {
        $item = new VideoNote();
        $item->setDuration(255);
        $this->assertEquals(255, $item->getDuration());
    }

    public function testGetThumb()
    {
        $item = new VideoNote();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'video_id',
            'width' => 256,
            'height' => 512,
        ]);
        $item->setThumb($thumb);
        $this->assertEquals($thumb, $item->getThumb());
    }

    public function testSetThumb()
    {
        $item = new VideoNote();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'video_id',
            'width' => 512,
            'height' => 256,
        ]);
        $item->setThumb($thumb);
        $this->assertEquals($thumb, $item->getThumb());
    }

    public function testGetFileSize()
    {
        $item = new VideoNote();
        $item->setFileSize(256);
        $this->assertEquals(256, $item->getFileSize());
    }

    public function testSetFileSize()
    {
        $item = new VideoNote();
        $item->setFileSize(256);
        $this->assertEquals(256, $item->getFileSize());
    }
}
