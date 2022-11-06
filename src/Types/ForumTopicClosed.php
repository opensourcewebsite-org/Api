<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object represents a service message about a forum topic closed in the chat. Currently holds no information.
 *
 * @package TelegramBot\Api\Types;
 */
class ForumTopicClosed extends BaseType
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
    protected static $map = [];
}
