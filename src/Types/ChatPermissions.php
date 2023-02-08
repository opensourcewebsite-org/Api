<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

class ChatPermissions extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
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
    ];

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @var bool
     */
    protected $canSendMessages;

    /**
     *  Optional. True, if the user is allowed to send audios
     *
     * @var bool
     */
    protected $canSendAudios;

    /**
     *  Optional. True, if the user is allowed to send documents
     *
     * @var bool
     */
    protected $canSendDocuments;

    /**
     *  Optional. True, if the user is allowed to send photos
     *
     * @var bool
     */
    protected $canSendPhotos;

    /**
     *  Optional. True, if the user is allowed to send videos
     *
     * @var bool
     */
    protected $canSendVideos;

    /**
     *  Optional. True, if the user is allowed to send video notes
     *
     * @var bool
     */
    protected $canSendVideoNotes;

    /**
     *  Optional. True, if the user is allowed to send voice notes
     *
     * @var bool
     */
    protected $canSendVoiceNotes;

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     *
     * @var bool
     */
    protected $canSendPolls;

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     *
     * @var bool
     */
    protected $canSendOtherMessages;

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies
     * can_send_media_messages
     *
     * @var bool
     */
    protected $canAddWebPagePreviews;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups
     *
     * @var bool
     */
    protected $canChangeInfo;

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     *
     * @var bool
     */
    protected $canInviteUsers;

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     *
     * @var bool
     */
    protected $canPinMessages;

    /**
     * Optional. True, if the user is allowed to create forum topics. If ommited defaults to the value of can_pin_messages
     *
     * @var bool
     */
    protected $canManageTopics;

    /**
     * @return bool
     */
    public function isCanSendMessages()
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
    public function isCanSendAudios()
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
    public function isCanSendDocuments()
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
    public function isCanSendPhotos()
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
    public function isCanSendVideos()
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
    public function isCanSendVideoNotes()
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
    public function isCanSendVoiceNotes()
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
    public function isCanSendPolls()
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
    public function isCanSendOtherMessages()
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
    public function isCanAddWebPagePreviews()
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
    public function isCanChangeInfo()
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
    public function isCanInviteUsers()
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
    public function isCanPinMessages()
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
}
