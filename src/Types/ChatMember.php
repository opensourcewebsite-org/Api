<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ChatMember extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['user', 'status'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'user' => User::class,
        'status' => true,
    ];

    /**
     * Information about the user
     *
     * @var User
     */
    protected $user;

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     *
     * @var string
     */
    protected $status;

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

    public static function fromResponse($data)
    {
        if ($data === true) {
            return true;
        }

        self::validate($data);
        $instance = new static();
        $instance->map($data);

        switch ($instance->getStatus()) {
            case 'creator':
                return ChatMemberOwner::fromResponse($data);
            case 'administrator':
                return ChatMemberAdministrator::fromResponse($data);
            case 'member':
                return ChatMemberMember::fromResponse($data);
            case 'restricted':
                return ChatMemberRestricted::fromResponse($data);
            case 'left':
                return ChatMemberLeft::fromResponse($data);
            case 'kicked':
                return ChatMemberBanned::fromResponse($data);
            default:
                return $instance;
        }
    }
}
