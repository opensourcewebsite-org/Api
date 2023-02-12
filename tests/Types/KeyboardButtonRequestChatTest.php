<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\KeyboardButtonRequestChat;

class KeyboardButtonRequestChatTest extends TestCase
{
    public function testRequestId()
    {
        $item = new KeyboardButtonRequestChat();
        $item->setRequestId(1);
        $this->assertEquals(1, $item->getRequestId());
    }

    public function testChatIsChannel()
    {
        $item = new KeyboardButtonRequestChat();
        $item->setChatIsChannel(false);
        $this->assertEquals(false, $item->getChatIsChannel());
    }
}
