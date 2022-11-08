<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopicReopened;

class ForumTopicReopenedTest extends TestCase
{
    public function testFromResponse()
    {
        $item = new ForumTopicReopened();
        $this->assertInstanceOf('TelegramBot\Api\Types\ForumTopicReopened', $item);
    }
}
