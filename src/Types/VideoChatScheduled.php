<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class VideoChatScheduled extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['start_date'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'start_date' => true,
    ];

    /**
     * Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator.
     *
     * @var int
     */
    protected $startDate;

    /**
     * @return int
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
}
