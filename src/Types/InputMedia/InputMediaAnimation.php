<?php

namespace TelegramBot\Api\Types\InputMedia;

use CURLFile;
use TelegramBot\Api\Types\ArrayOfMessageEntity;

/**
 * Class InputMediaAnimation
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 *
 * @package TelegramBot\Api
 */
class InputMediaAnimation extends InputMedia
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'type' => true,
        'media' => true,
        'thumb' => CURLFile::class,
        'caption' => true,
        'parse_mode' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'width' => true,
        'height' => true,
        'duration' => true,
        'has_spoiler' => true,
    ];

    /**
     * Optional. Thumbnail of the file sent.
     *
     * @var CURLFile|string
     */
    protected $thumb;

    /**
     * Optional. Animation width.
     *
     * @var int
     */
    protected $width;

    /**
     * Optional. Animation height.
     *
     * @var int
     */
    protected $height;

    /**
     * Optional. Animation duration in seconds.
     *
     * @var int
     */
    protected $duration;

    /**
     * Optional. Pass True if the animation needs to be covered with a spoiler animation
     *
     * @var bool
     */
    protected $hasSpoiler;

    /**
     * InputMediaVideo constructor.
     *
     * @param string $media
     * @param CURLFile|string|null $thumb
     * @param string|null $caption
     * @param string|null $parseMode
     * @param ArrayOfMessageEntity|null $captionEntities
     * @param int|null $width
     * @param int|null $height
     * @param int|null $duration
     * @param bool $hasSpoiler
     */
    public function __construct(
        $media,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $captionEntities = null,
        $width = null,
        $height = null,
        $duration = null,
        $hasSpoiler = false
    ) {
        $this->type = 'animation';
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->captionEntities = $captionEntities;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->hasSpoiler = $hasSpoiler;
    }

    /**
     * @return CURLFile|string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param CURLFile|string $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
