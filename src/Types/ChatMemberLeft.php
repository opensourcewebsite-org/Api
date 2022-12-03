<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ChatMemberLeft extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'status',
        'user',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'status' => true,
        'user' => User::class,
    ];

    /**
     * The member's status in the chat.
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
    public function isActiveChatMember()
    {
        return false;
    }
}
