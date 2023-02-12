<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ChatShared;

class ChatSharedTest extends TestCase
{
    public function testRequestId()
    {
        $item = new ChatShared();
        $item->setRequestId(1);
        $this->assertEquals(1, $item->getRequestId());
    }

    public function testChatId()
    {
        $item = new ChatShared();
        $item->setChatId(1);
        $this->assertEquals(1, $item->getChatId());
    }
}
