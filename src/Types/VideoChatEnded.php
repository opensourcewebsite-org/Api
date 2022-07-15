<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class VideoChatEnded extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['duration'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'duration' => true,
    ];

    /**
     * Video chat duration in seconds.
     *
     * @var int
     */
    protected $duration;

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
}
