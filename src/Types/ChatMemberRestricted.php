<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ChatMemberRestricted extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'status',
        'user',
        'is_member',
        'can_change_info',
        'can_invite_users',
        'can_pin_messages',
        'can_send_messages',
        'can_send_media_messages',
        'can_send_polls',
        'can_send_other_messages',
        'can_add_web_page_preview',
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
        'is_member' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'can_send_messages' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_prview' => true,
        'until_date' => true,
    ];

    /**
     * The member's status in the chat, always "restricted"
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
     * True, if the user is a member of the chat at the moment of the request.
     *
     * @var bool
     */
    protected $isMember;

    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     *
     * @var bool
     */
    protected $canChangeInfo;

    /**
     * True, if the user is allowed to invite new users to the chat
     *
     * @var bool
     */
    protected $canInviteUsers;

    /**
     * True, if the user is allowed to pin messages
     *
     * @var bool
     */
    protected $canPinMessages;

    /**
     *  True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @var bool
     */
    protected $canSendMessages;

    /**
     * True, if thu user is allowed to send audios, documents, photos, videos, video notes and voice notes
     *
     * @var bool
     */
    protected $canSendMediaMessages;

    /**
     * True, if the user is allowed to send polls
     *
     * @var bool
     */
    protected $canSendPolls;

    /**
     * True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @var bool
     */
    protected $canSendOtherMessages;

    /**
     * True, if the user is allowed to add web page previews to their messages
     *
     * @var bool
     */
    protected $canAddWebPagePreview;

    /**
     * Date when restrictions will be lifted for this user; unix time, if 0, thet the user is restricted forever
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
     * @return bool
     */
    public function isMember()
    {
        return $this->isMember;
    }

    /**
     * @param bool $isMember
     */
    public function setIsMember($isMember)
    {
        $this->isMember = $isMember;
    }

    /**
     * @return bool
     */
    public function canChangeInfo()
    {
        return $this->canChangeInfo;
    }

    /**
     * @param bool $canChangeInfo
     */
    public function setCanChangeInfo($canChangeInfo)
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    /**
     * @return bool
     */
    public function canInviteUsers()
    {
        return $this->canInviteUsers;
    }

    /**
     * @param bool $canInviteUsers
     */
    public function setCanInviteUsers($canInviteUsers)
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    /**
     * @return bool
     */
    public function canPinMessages()
    {
        return $this->canPinMessages;
    }

    /**
     * @param bool $canPinMessages
     */
    public function setCanPinMessages($canPinMessages)
    {
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * @return bool
     */
    public function canSendMessages()
    {
        return $this->canSendMessages;
    }

    /**
     * @param bool $canSendMessages
     */
    public function setCanSendMessages($canSendMessages)
    {
        $this->canSendMessages = $canSendMessages;
    }

    /**
     * @return bool
     */
    public function canSendMediaMessages()
    {
        return $this->canSendMediaMessages;
    }

    /**
     * @param bool $canSendMediaMessages
     */
    public function setCanSendMediaMessages($canSendMediaMessages)
    {
        $this->canSendMediaMessages = $canSendMediaMessages;
    }

    /**
     * @return bool
     */
    public function canSendPolls()
    {
        return $this->canSendPolls;
    }

    /**
     * @param bool $canSendPolls
     */
    public function setCanSendPolls($canSendPolls)
    {
        $this->canSendPolls = $canSendPolls;
    }

    /**
     * @return bool
     */
    public function canSendOtherMessages()
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @param bool $canSendOtherMessages
     */
    public function setCanSendOtherMessages($canSendOtherMessages)
    {
        $this->canSendOtherMessages = $canSendOtherMessages;
    }

    /**
     * @return bool
     */
    public function canAddWebPagePreview()
    {
        return $this->canAddWebPagePreview;
    }

    /**
     * @param bool $canAddWebPagePreview
     */
    public function setCanAddWebPagePreview($canAddWebPagePreview)
    {
        $this->canAddWebPagePreview = $canAddWebPagePreview;
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
}
