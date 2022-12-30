<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopicCreated;

class ForumTopicEditedTest extends TestCase
{
    public function testName()
    {
        $item = new ForumTopicCreated();
        $item->setName('topic name');
        $this->assertEquals('topic name', $item->getName());
    }

    public function testIconCustomEmojiId()
    {
        $item = new ForumTopicCreated();
        $item->setIconCustomEmojiId('emoji_id');
        $this->assertEquals('emoji_id', $item->getIconCustomEmojiId());
    }
}
