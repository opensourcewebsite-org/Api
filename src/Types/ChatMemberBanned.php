<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ChatMemberBanned extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'status',
        'user',
        'until_date',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'status' => true,
        'user' => User::class,
        'until_date' => true,
    ];

    /**
     * The member status in the chat, always 'kicked'
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
     * Date when restrictions will be lifted from this user; unix time, If 0, then the user is banned forever
     *
     * @var integer
     */
    protected $untilDate;

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
     * @return integer
     */
    public function getUntilDate()
    {
        return $this->untilDate;
    }

    /**
     * @param integer $untilDate
     */
    public function setUntilDate($untilDate)
    {
        $this->untilDate = $untilDate;
    }

    /**
     * @return bool
     */
    public function isActiveChatMember()
    {
        return false;
    }
}
