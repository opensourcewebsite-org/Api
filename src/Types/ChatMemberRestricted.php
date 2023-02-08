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
        'can_send_messages',
        'can_send_audios',
        'can_send_documents',
        'can_send_photos',
        'can_send_videos',
        'can_send_video_notes',
        'can_send_voice_notes',
        'can_send_polls',
        'can_send_other_messages',
        'can_add_web_page_previews',
        'can_change_info',
        'can_invite_users',
        'can_pin_messages',
        'can_manage_topics',
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
        'can_send_messages' => true,
        'can_send_audios' => true,
        'can_send_documents' => true,
        'can_send_photos' => true,
        'can_send_videos' => true,
        'can_send_video_notes' => true,
        'can_send_voice_notes' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'can_manage_topics' => true,
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
     * True, if the user is a member of the chat at the moment of the request
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
     *  True, if the user is allowed to send text messages, contacts, invoices, locations and venues
     *
     * @var bool
     */
    protected $canSendMessages;

    /**
     *  True, if the user is allowed to send audios
     *
     * @var bool
     */
    protected $canSendAudios;

    /**
     *  True, if the user is allowed to send documents
     *
     * @var bool
     */
    protected $canSendDocuments;

    /**
     *  True, if the user is allowed to send photos
     *
     * @var bool
     */
    protected $canSendPhotos;

    /**
     *  True, if the user is allowed to send videos
     *
     * @var bool
     */
    protected $canSendVideos;

    /**
     *  True, if the user is allowed to send video notes
     *
     * @var bool
     */
    protected $canSendVideoNotes;

    /**
     *  True, if the user is allowed to send voice notes
     *
     * @var bool
     */
    protected $canSendVoiceNotes;

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
    protected $canAddWebPagePreviews;

    /**
     * True, if the user is allowed to create forum topics
     *
     * @var bool
     */
    protected $canManageTopics;

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
    public function canSendAudios()
    {
        return $this->canSendAudios;
    }

    /**
     * @param bool $canSendAudios
     */
    public function setCanSendAudios($canSendAudios)
    {
        $this->canSendAudios = $canSendAudios;
    }

    /**
     * @return bool
     */
    public function canSendDocuments()
    {
        return $this->canSendDocuments;
    }

    /**
     * @param bool $canSendDocuments
     */
    public function setCanSendDocuments($canSendDocuments)
    {
        $this->canSendDocuments = $canSendDocuments;
    }

    /**
     * @return bool
     */
    public function canSendPhotos()
    {
        return $this->canSendPhotos;
    }

    /**
     * @param bool $canSendPhotos
     */
    public function setCanSendPhotos($canSendPhotos)
    {
        $this->canSendPhotos = $canSendPhotos;
    }

    /**
     * @return bool
     */
    public function canSendVideos()
    {
        return $this->canSendVideos;
    }

    /**
     * @param bool $canSendVideos
     */
    public function setCanSendVideos($canSendVideos)
    {
        $this->canSendVideos = $canSendVideos;
    }

    /**
     * @return bool
     */
    public function canSendVideoNotes()
    {
        return $this->canSendVideoNotes;
    }

    /**
     * @param bool $canSendVideoNotes
     */
    public function setCanSendVideoNotes($canSendVideoNotes)
    {
        $this->canSendVideoNotes = $canSendVideoNotes;
    }

    /**
     * @return bool
     */
    public function canSendVoiceNotes()
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * @param bool $canSendVoiceNotes
     */
    public function setCanSendVoiceNotes($canSendVoiceNotes)
    {
        $this->canSendVoiceNotes = $canSendVoiceNotes;
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
    public function canAddWebPagePreviews()
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @param bool $canAddWebPagePreviews
     */
    public function setCanAddWebPagePreviews($canAddWebPagePreviews)
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
    }

    /**
     * @return bool
     */
    public function canManageTopics()
    {
        return $this->canManageTopics;
    }

    /**
     * @param bool $canManageTopics
     */
    public function setCanManageTopics($canManageTopics)
    {
        $this->canManageTopics = $canManageTopics;
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
        return true;
    }
}
