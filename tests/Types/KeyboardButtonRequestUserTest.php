<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\KeyboardButtonRequestUser;

class KeyboardButtonRequestUserTest extends TestCase
{
    public function testRequestId()
    {
        $item = new KeyboardButtonRequestUser();
        $item->setRequestId(1);
        $this->assertEquals(1, $item->getRequestId());
    }
}
