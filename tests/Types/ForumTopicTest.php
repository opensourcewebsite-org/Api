<?php

namespace TelagramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForumTopic;

class ForumTopicTest extends TestCase
{
    public function testMessageThreadId()
    {
        $item = new ForumTopic();
        $item->setMessageThreadId(512);
        $this->assertEquals(512, $item->getMessageThreadId());
    }

    public function testName()
    {
        $item = new ForumTopic();
        $item->setName('forum_topic');
        $this->assertEquals('forum_topic', $item->getName());
    }

    public function testIconColor()
    {
        $item = new ForumTopic();
        $item->setIconColor(512);
        $this->assertEquals(512, $item->getIconColor());
    }

    public function testIconCustomEmojiId()
    {
        $item = new ForumTopic();
        $item->setIconCustomEmojiId('custom_emoji_id');
        $this->assertEquals('custom_emoji_id', $item->getIconCustomEmojiId());
    }

    public function testFromResponse()
    {
        $actual = ForumTopic::fromResponse([
            'message_thread_id' => 512,
            'name' => 'forum_topic',
            'icon_color' => 0xFFD67E,
            'icon_custom_emoji_id' => 'custom_emoji_id',
        ]);
        $expected = new ForumTopic();
        $expected->setMessageThreadId(512);
        $expected->setName('forum_topic');
        $expected->setIconColor(0xFFD67E);
        $expected->setIconCustomEmojiId('custom_emoji_id');
        $this->assertInstanceOf('TelegramBot\Api\Types\ForumTopic', $actual);
        $this->assertEquals($actual, $expected);
    }
}
