<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object represents a forum topic.
 *
 * @package TelegramBot\Api\Types
 */
class ForumTopic extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'message_thread_id',
        'name',
        'icon_color',
    ];

    protected static $map = [
        'message_thread_id' => true,
        'name' => true,
        'icon_color' => true,
        'icon_custom_emoji_id' => true,
    ];

    /**
     * Unique identifier of the forum topic
     *
     * @var integer
     */
    protected $messageThreadId;

    /**
     * Name of the topic
     *
     * @var string
     */
    protected $name;

    /**
     * Color of the topic in RGB format
     *
     * @var integer
     */
    protected $iconColor;

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon
     *
     * @var string
     */
    protected $iconCustomEmojiId;

    /**
     * @return integer
     */
    public function getMessageThreadId()
    {
        return $this->messageThreadId;
    }

    /**
     * @param integer $messageThreadId
     */
    public function setMessageThreadId($messageThreadId)
    {
        $this->messageThreadId = $messageThreadId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getIconColor()
    {
        return $this->iconColor;
    }

    /**
     * @param integer $iconColor
     */
    public function setIconColor($iconColor)
    {
        $this->iconColor = $iconColor;
    }

    /**
     * @return string
     */
    public function getIconCustomEmojiId()
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * @param string $iconCustomEmojiId
     */
    public function setIconCustomEmojiId($iconCustomEmojiId)
    {
        $this->iconCustomEmojiId = $iconCustomEmojiId;
    }
}
