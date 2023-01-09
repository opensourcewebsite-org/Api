<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopicEdited;

class ForumTopicEditedTest extends TestCase
{
    public function testName()
    {
        $item = new ForumTopicEdited();
        $item->setName('topic name');
        $this->assertEquals('topic name', $item->getName());
    }

    public function testIconCustomEmojiId()
    {
        $item = new ForumTopicEdited();
        $item->setIconCustomEmojiId('emoji_id');
        $this->assertEquals('emoji_id', $item->getIconCustomEmojiId());
    }

    public function testFromResponse()
    {
        $item = ForumTopicEdited::fromResponse(['name' => 'topic name', 'icon_custom_emoji_id' => 'emoji_id']);
        $this->assertInstanceOf('\TelegramBot\Api\Types\ForumTopicEdited', $item);
        $this->assertEquals('topic name', $item->getName());
        $this->assertEquals('emoji_id', $item->getIconCustomEmojiId());
    }
}
