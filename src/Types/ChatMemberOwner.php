<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * Represents a chat member that owns the chat and has all administrator privileges
 *
 * @package TelegramBot\Api\Types
 */
class ChatMemberOwner extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'status',
        'user',
        'is_anonymous',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'status' => true,
        'user' => User::class,
        'is_anonymous' => true,
        'custom_title' => true,
    ];

    /**
     * The member's status in the chat, always "creator"
     *
     * @var string
     */
    protected $status;

    /**
     * Information about the user
     *
     * @var User
     */
    protected $user;

    /**
     * True, if the user's presence in the chat is hidden
     *
     * @var bool
     */
    protected $isAnonymous;

    /**
     * Optional. Custom title for the user
     *
     * @var string
     */
    protected $customTitle;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function isAnonymous()
    {
        return $this->isAnonymous;
    }

    /**
     * @param bool $isAnonymous
     */
    public function setIsAnonymous($isAnonymous)
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @return string
     */
    public function getCustomTitle()
    {
        return $this->customTitle;
    }

    /**
     * @param string $customTitle
     */
    public function setCustomTitle($customTitle)
    {
        $this->customTitle = $customTitle;
    }

    /**
     * @return bool
     */
    public function isActiveChatMember()
    {
        return true;
    }
}
