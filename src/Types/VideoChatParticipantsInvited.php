<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\TypeInterface;

/**
 * Class VideoChatParticipantsInvited
 *
 * @package TelegramBot\Api\Types
 */
class VideoChatParticipantsInvited extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['users'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'users' => ArrayOfUser::class,
    ];

    /**
     * New members that were invited to the video chat.
     * Array of \TelegramBot\Api\Types\User
     *
     * @var array
     */
    protected $users;

    /**
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }
}
