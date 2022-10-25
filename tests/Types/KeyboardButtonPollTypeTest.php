<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\KeyboardButtonPollType;

class KeyboardButtonPollTypeTest extends TestCase
{
    public function testGetType()
    {
        $item = new KeyboardButtonPollType();
        $item->setType('quiz');
        $this->assertEquals('quiz', $item->getType());
    }

    public function testSetType()
    {
        $item = new KeyboardButtonPollType();
        $item->setType('regular');
        $this->assertEquals('regular', $item->getType());
    }
}