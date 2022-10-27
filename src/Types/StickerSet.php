<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class StickerSet extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'name',
        'title',
        'sticker_type',
        'is_animated',
        'is_video',
        'stickers',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'name' => true,
        'title' => true,
        'sticker_type' => true,
        'is_animated' => true,
        'is_video' => true,
        'stickers' => ArrayOfSticker::class,
        'thumb' => PhotoSize::class,
    ];

    /**
     * Sticker set name
     *
     * @var string
     */
    protected $name;

    /**
     * Sticker set title
     *
     * @var string
     */
    protected $title;

    /**
     * Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     *
     * @var string
     */
    protected $stickerType;

    /**
     * True, if the sticker set contains animated stickers
     *
     * @var bool
     */
    protected $isAnimated;

    /**
     * True, if the sticker set contains video stickers
     *
     * @var bool
     */
    protected $isVideo;

    /**
     * List of all stickers
     *
     * @var ArrayOfSticker
     */
    protected $stickers;

    /**
     * Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     *
     * @var PhotoSize
     */
    protected $thumb;

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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getStickerType()
    {
        return $this->stickerType;
    }

    /**
     * @param string $stickerType
     */
    public function setStickerType($stickerType)
    {
        $this->stickerType = $stickerType;
    }

    /**
     * @return bool
     */
    public function isAnimated()
    {
        return $this->isAnimated;
    }

    /**
     * @param bool $isAnimated
     */
    public function setIsAnimated($isAnimated)
    {
        $this->isAnimated = $isAnimated;
    }

    /**
     * @return bool
     */
    public function isVideo()
    {
        return $this->isVideo;
    }

    /**
     * @param bool $isVideo
     */
    public function setIsVideo($isVideo)
    {
        $this->isVideo = $isVideo;
    }

    /**
     * @return ArrayOfSticker
     */
    public function getStickers()
    {
        return $this->stickers;
    }

    /**
     * @param ArrayOfSticker $stickers
     */
    public function setStickers($stickers)
    {
        $this->stickers = $stickers;
    }

    /**
     * @return PhotoSize
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }
}
