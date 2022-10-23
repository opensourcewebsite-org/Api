<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * Represents a join request sent to a chat.
 *
 * @package TelegramBot\Api\Types
 */
class ChatJoinRequest extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'chat',
        'from',
        'date',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'date' => true,
        'bio' => true,
        'invite_link' => ChatInviteLink::class,
    ];

    /**
     * Chat to which the request was sent
     *
     * @var Chat
     */
    protected $chat;

    /**
     * User that sent the join request
     *
     * @var User
     */
    protected $from;

    /**
     * Date the request was sent in Unix time
     *
     * @var integer
     */
    protected $date;

    /**
     * Optional. Bio of the user.
     *
     * @var string
     */
    protected $bio;

    /**
     * Optional. Chat invite link that was used by the user to send the join request
     *
     * @var ChatInviteLink
     */
    protected $inviteLink;

    /**
     * @return Chat
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     */
    public function setChat($chat)
    {
        $this->chat = $chat;
    }

    /**
     * @return User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param string $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @return ChatInviteLink
     */
    public function getInviteLink()
    {
        return $this->inviteLink;
    }

    /**
     * @param ChatInviteLink $inviteLink
     */
    public function setInviteLink($inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }
}
