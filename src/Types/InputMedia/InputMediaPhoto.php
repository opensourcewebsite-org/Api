<?php

namespace TelegramBot\Api\Types\InputMedia;

use TelegramBot\Api\Types\ArrayOfMessageEntity;

/**
 * Class InputMediaPhoto
 * Represents a photo to be sent.
 *
 * @package TelegramBot\Api
 */
class InputMediaPhoto extends InputMedia
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'type' => true,
        'media' => true,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'has_spoiler' => true,
    ];

    /**
     * Optional. Pass True if the photo needs to be covered with a spoiler animation.
     *
     * @var bool
     */
    protected $hasSpoiler;

    /**
     * InputMediaPhoto constructor.
     *
     * @param string $media
     * @param string|null $caption
     * @param string|null $parseMode
     * @param ArrayOfMessageEntity|null $captionEntities
     * @param bool $hasSpoiler
     */
    public function __construct($media, $caption = null, $parseMode = null, $captionEntities = null, $hasSpoiler = false)
    {
        $this->type = 'photo';
        $this->media = $media;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->captionEntities = $captionEntities;
        $this->hasSpoiler = $hasSpoiler;
    }

    /**
     * @return bool
     */
    public function hasSpoiler()
    {
        return $this->hasSpoiler();
    }

    /**
     * @param bool $hasSpoiler
     */
    public function setHasSpoiler($hasSpoiler)
    {
        $this->hasSpoiler = $hasSpoiler;
    }
}
