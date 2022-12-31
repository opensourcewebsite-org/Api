<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ForumTopicEdited
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'name' => true,
        'icon_custom_emoji_id' => true,
    ];

    /**
     * Optional. New name of the topic if it was edited
     *
     * @var string
     */
    protected $name;

    /**
     * Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     *
     * @var string
     */
    protected $iconCustomEmojiId;

    /**
     * @return strnig
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
