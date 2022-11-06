<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopicCreated;

class ForumTopicCreatedTest extends TestCase
{
    public function testName()
    {
        $item = new ForumTopicCreated();
        $item->setName('forum topic');
        $this->assertEquals('forum topic', $item->getName());
    }

    public function testIconColor()
    {
        $item = new ForumTopicCreated();
        $item->setIconColor(512);
        $this->assertEquals(512, $item->getIconColor());
    }

    public function testIconCustomEmojiId()
    {
        $item = new ForumTopicCreated();
        $item->setIconCustomEmojiId("custom_emoji_id");
        $this->assertEquals('custom_emoji_id', $item->getIconCustomEmojiId());
    }

    public function testFromResponse()
    {
        $item = ForumTopicCreated::fromResponse([
            'name' => 'forum topic',
            'icon_color' => 512,
            'icon_custom_emoji_id' => 'custom_emoji_id',
        ]);
        $this->assertInstanceOf('TelegramBot\Api\Types\ForumTopicCreated', $item);
        $this->assertEquals('forum topic', $item->getName());
        $this->assertEquals(512, $item->getIconColor());
        $this->assertEquals('custom_emoji_id', $item->getIconCustomEmojiId());
    }
}
