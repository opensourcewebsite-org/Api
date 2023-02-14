<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;

class ReplyKeyboardMarkupTest extends TestCase
{
    public function testConstructor()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $this->assertEquals(array(array('one', 'two')), $item->getKeyboard());
        $this->assertEquals(null, $item->isOneTimeKeyboard());
        $this->assertEquals(null, $item->isResizeKeyboard());
        $this->assertEquals(null, $item->isSelective());
    }

    public function testConstructor2()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')), true);
        $this->assertEquals(array(array('one', 'two')), $item->getKeyboard());
        $this->assertTrue($item->isOneTimeKeyboard());
        $this->assertEquals(null, $item->isResizeKeyboard());
        $this->assertEquals(null, $item->isSelective());
    }

    public function testConstructor3()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')), true, true);
        $this->assertEquals(array(array('one', 'two')), $item->getKeyboard());
        $this->assertTrue($item->isOneTimeKeyboard());
        $this->assertTrue($item->isResizeKeyboard());
        $this->assertEquals(null, $item->isSelective());
    }

    public function testConstructor4()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')), true, true, true);
        $this->assertEquals(array(array('one', 'two')), $item->getKeyboard());
        $this->assertTrue($item->isOneTimeKeyboard());
        $this->assertTrue($item->isResizeKeyboard());
        $this->assertTrue($item->isSelective());
    }

    public function testSetKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setKeyboard(array(array('one', 'two', 'three')));
        $this->assertEquals(array(array('one', 'two', 'three')), $item->getKeyboard());
    }

    public function testGetKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setKeyboard(array(array('one', 'two', 'three')));
        $this->assertEquals(array(array('one', 'two', 'three')), $item->getKeyboard());
    }

    public function testIsPersistant()
    {
        $item = new ReplyKeyboardMarkup(array(array('one')));
        $item->setIsPersistent(false);
        $this->assertEquals(false, $item->isPersistent());
    }

    public function testSetSelective()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setSelective(true);
        $this->assertTrue($item->isSelective());
    }

    public function testIsSelective()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setSelective(true);
        $this->assertTrue($item->isSelective());
    }

    public function testSetOneTimeKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setOneTimeKeyboard(false);
        $this->assertFalse($item->isOneTimeKeyboard());
    }

    public function testIsOneTimeKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setOneTimeKeyboard(false);
        $this->assertFalse($item->isOneTimeKeyboard());
    }

    public function testSetResizeKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setResizeKeyboard(true);
        $this->assertTrue($item->isResizeKeyboard());
    }

    public function testIsResizeKeyboard()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $item->setResizeKeyboard(true);
        $this->assertTrue($item->isResizeKeyboard());
    }

    public function testToJson()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $this->assertEquals(json_encode(array('keyboard' => array(array('one', 'two')))), $item->toJson());
    }

    public function testToJson2()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')), true, true, true);
        $this->assertEquals(
            json_encode(array(
            'keyboard' => array(array('one', 'two')),
            'one_time_keyboard' => true,
            'resize_keyboard' => true,
            'selective' => true,
        )),
            $item->toJson()
        );
    }

    public function testToJson3()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')));
        $this->assertEquals(array('keyboard' => array(array('one', 'two'))), $item->toJson(true));
    }

    public function testToJson4()
    {
        $item = new ReplyKeyboardMarkup(array(array('one', 'two')), true, true, true);
        $this->assertEquals(
            array(
            'keyboard' => array(array('one', 'two')),
            'one_time_keyboard' => true,
            'resize_keyboard' => true,
            'selective' => true,
        ),
            $item->toJson(true)
        );
    }
}
