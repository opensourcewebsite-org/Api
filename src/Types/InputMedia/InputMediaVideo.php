<?php

namespace TelegramBot\Api\Types\InputMedia;

use CURLFile;
use TelegramBot\Api\Types\ArrayOfMessageEntity;

/**
 * Class InputMediaVideo
 * Represents a video to be sent.
 *
 * @package TelegramBot\Api
 */
class InputMediaVideo extends InputMedia
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
        'supports_streaming' => true,
        'has_spoiler' => true,
    ];

    /**
     * Optional. Thumbnail of the file sent.
     *
     * @var CURLFile|string
     */
    protected $thumb;

    /**
     * Optional. Video width.
     *
     * @var int
     */
    protected $width;

    /**
     * Optional. Video height.
     *
     * @var int
     */
    protected $height;

    /**
     * Optional. Video duration.
     *
     * @var int
     */
    protected $duration;

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming.
     *
     * @var bool
     */
    protected $supportsStreaming;

    /**
     * Optional. Pass True if the video needs to be covered with a spoiler animation
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
     * @param bool $supportsStreaming
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
        $supportsStreaming = false,
        $hasSpoiler = false
    ) {
        $this->type = 'video';
        $this->media = $media;
        $this->thumb = $thumb;
        $this->caption = $caption;
        $this->parseMode = $parseMode;
        $this->captionEntities = $captionEntities;
        $this->width = $width;
        $this->height = $height;
        $this->duration = $duration;
        $this->supportsStreaming = $supportsStreaming;
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
    public function getSupportsStreaming()
    {
        return $this->supportsStreaming;
    }

    /**
     * @param bool $supportsStreaming
     */
    public function setSupportsStreaming($supportsStreaming)
    {
        $this->supportsStreaming = $supportsStreaming;
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
