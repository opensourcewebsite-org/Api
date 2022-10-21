<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/** 
 * This object represents a service message about a change in auto-delete timer settings
*/
class MessageAutoDeleteTimerChanged extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['message_auto_delete_time'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'message_auto_delete_time' => true,
    ];

    /**
     * New auto-delete time for messages in the chat; in seconds
     *
     * @var integer
     */
    protected $messageAutoDeleteTime;

    public function getMessageAutoDeleteTime()
    {
        return $this->messageAutoDeleteTime;
    }

    public function setMessageAutoDeleteTime($messageAutoDeleteTime)
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
    }
}
