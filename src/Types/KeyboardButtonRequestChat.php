<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * This object defines the criteria used to request a suitable chat. The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 *
 * @package TelegramBot\Api\Types
 */
class KeyboardButtonRequestChat extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['request_id', 'chat_is_channel'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'request_id' => true,
        'chat_is_channel' => true,
        'chat_is_forum' => true,
        'chat_has_username' => true,
        'chat_is_created' => true,
        'user_administrator_rights' => ChatAdministratorRights::class,
        'bot_administrator_rights' => ChatAdministratorRights::class,
        'bot_is_member' => true,
    ];

    /**
     * Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
     *
     * @var int
     */
    protected $requestId;

    /**
     * Pass True to request a channel chat, pass False to request a group or a supergroup chat.
     *
     * @var bool
     */
    protected $chatIsChannel;

    /**
     * Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
     *
     * @var bool
     */
    protected $chatIsForum;

    /**
     * Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
     *
     * @var bool
     */
    protected $chatHasUsername;

    /**
     * Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     *
     * @var bool
     */
    protected $chatIsCreated;

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     *
     * @var ChatAdministratorRights
     */
    protected $userAdministratorRights;

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     *
     * @var ChatAdministratorRights
     */
    protected $botAdministratorRights;

    /**
     * Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     *
     * @var bool
     */
    protected $botIsMember;

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
    public function getChatIsChannel()
    {
        return $this->chatIsChannel;
    }

    /**
     * @param bool $chatIsChannel
     */
    public function setChatIsChannel($chatIsChannel)
    {
        $this->chatIsChannel = $chatIsChannel;
    }

    /**
     * @return bool
     */
    public function getChatIsForum()
    {
        return $this->chatIsForum;
    }

    /**
     * @param bool $chatIsForum
     */
    public function setChatIsForum($chatIsForum)
    {
        $this->chatIsForum = $chatIsForum;
    }

    /**
     * @return bool
     */
    public function getChatHasUsername()
    {
        return $this->chatHasUsername;
    }

    /**
     * @param bool $chatHasUsername
     */
    public function setChatHasUsername($chatHasUsername)
    {
        $this->chatHasUsername = $chatHasUsername;
    }

    /**
     * @return bool
     */
    public function getChatIsCreated()
    {
        return $this->chatIsCreated;
    }

    /**
     * @param bool $chatIsCreated
     */
    public function setChatIsCreate($chatIsCreated)
    {
        $this->chatIsCreated = $chatIsCreated;
    }

    /**
     * @return ChatAdministratorRights
     */
    public function getUserAdministratorRights()
    {
        return $this->userAdministratorRights;
    }

    /**
     * @param ChatAdministratorRights $userAdministratorRights
     */
    public function setUserAdministratorRights($userAdministratorRights)
    {
        $this->userAdministratorRights = $userAdministratorRights;
    }

    /**
     * @return ChatAdministratorRights
     */
    public function getBotAdministratorRights()
    {
        return $this->botAdministratorRights;
    }

    /**
     * @param ChatAdministratorRights $botAdministratorRights
     */
    public function setBotAdministratorRights($botAdministratorRights)
    {
        $this->botAdministratorRights = $botAdministratorRights;
    }

    /**
     * @return bool
     */
    public function getBotIsMember()
    {
        return $this->botIsMember;
    }

    /**
     * @param bool $botIsMember
     */
    public function setBotIsMember($botIsMember)
    {
        $this->botIsMember = $botIsMember;
    }
}
