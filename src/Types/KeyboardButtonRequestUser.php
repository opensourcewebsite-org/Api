<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object defines the criteria used to request a suitable user. The identifier of the selected user will be shared with the bot when the corresponding button is pressed.
 *
 * @package TelegramBot\Api\Types
 */
class KeyboardButtonRequestUser extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['request_id'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'request_id' => true,
        'user_is_bot' => true,
        'user_is_premium' => true,
    ];

    /**
     * Signed 32-bit identifier of the request, which will be received back in the UserShared object. Must be unique within the message
     *
     * @var int
     */
    protected $requestId;

    /**
     * Optional. Pass True to request a bot, pass False to request a regular user. If not specified, no additional restrictions are applied.
     *
     * @var bool
     */
    protected $userIsBot;

    /**
     *
     * Optional. Pass True to request a premium user, pass False to request a non-premium user. If not specified, no additional restrictions are applied.
     * @var bool
     */
    protected $userIsPremium;

    /**
     * @return int
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return bool
     */
    public function getUserIsBot()
    {
        return $this->userIsBot;
    }

    /**
     * @param bool $userIsBot
     */
    public function setUserIsBot($userIsBot)
    {
        $this->userIsBot = $userIsBot;
    }

    /**
     * @return bool
     */
    public function getUserIsPremium()
    {
        return $this->userIsPremium;
    }

    /**
     * @param bool $userIsPremium
     */
    public function setUserIsPremium($userIsPremium)
    {
        $this->userIsPremium = $userIsPremium;
    }
}
