<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\MessageAutoDeleteTimerChanged;

class MessageAutoDeleteTimerChangedTest extends TestCase
{
    public function testeGetMessageAutoDeleteTime()
    {
        $item = new MessageAutoDeleteTimerChanged();
        $item->setMessageAutoDeleteTime(255);
        $this->assertEquals(255, $item->getMessageAutoDeleteTime());
    }

    public function testSetMessageAutoDeleteTime()
    {
        $item = new MessageAutoDeleteTimerChanged();
        $item->setMessageAutoDeleteTime(255);
        $this->assertEquals(255, $item->getMessageAutoDeleteTime());
    }
}
