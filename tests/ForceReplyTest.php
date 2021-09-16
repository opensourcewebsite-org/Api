<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForceReply;

class ForceReplyTest extends TestCase
{
    public function testConstructor()
    {
        $item = new ForceReply();
        $this->assertTrue($item->isforceReply());
        $this->assertEquals(null, $item->isSelective());
    }

    public function testConstructor2()
    {
        $item = new ForceReply(true, true);
        $this->assertTrue($item->isforceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor3()
    {
        $item = new ForceReply(false, true);
        $this->assertFalse($item->isforceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor4()
    {
        $item = new ForceReply(true);
        $this->assertTrue($item->isforceReply());
        $this->assertEquals(null, $item->isSelective());
    }

    public function testSetforceReply()
    {
        $item = new ForceReply(true);
        $item->setforceReply(false);
        $this->assertFalse($item->isforceReply());
    }

    public function testIsforceReply()
    {
        $item = new ForceReply(true);
        $item->setforceReply(false);
        $this->assertFalse($item->isforceReply());
    }

    public function testSetSelective()
    {
        $item = new ForceReply();
        $item->setSelective(true);
        $this->assertTrue($item->isSelective());
    }

    public function testIsSelective()
    {
        $item = new ForceReply();
        $item->setSelective(true);
        $this->assertTrue($item->isSelective());
    }

    public function testToJson()
    {
        $item = new ForceReply();
        $this->assertEquals(json_encode(array('force_reply' => true)), $item->toJson());
    }

    public function testToJson2()
    {
        $item = new ForceReply();
        $this->assertEquals(array('force_reply' => true), $item->toJson(true));
    }

    public function testToJson3()
    {
        $item = new ForceReply(true, true);
        $this->assertEquals(json_encode(array('force_reply' => true, 'selective' => true)), $item->toJson());
    }

    public function testToJson4()
    {
        $item = new ForceReply(true, true);
        $this->assertEquals(array('force_reply' => true, 'selective' => true), $item->toJson(true));
    }
}
