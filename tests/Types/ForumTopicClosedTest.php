<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopicClosed;

class ForumTopicClosedTest extends TestCase
{
    public function testFromResponse()
    {
        $item = ForumTopicClosed::fromResponse([]);
        $this->assertInstanceOf('TelegramBot\Api\Types\ForumTopicClosed', $item);
    }
}
