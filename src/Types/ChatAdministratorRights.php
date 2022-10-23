<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

/**
 * Represents the rights of an administrator in a chat.
 *
 * @package TelegramBot\Api\Types
 */
class ChatAdministratorRights extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = [
        'is_anonymous',
        'can_manage_chat',
        'can_delete_messages',
        'can_manage_video_chats',
        'can_restrict_members',
        'can_promote_members',
        'can_change_info',
        'can_invite_users',
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'is_anonymous' => true,
        'can_manage_chat' => true,
        'can_delete_messages' => true,
        'can_manage_video_chats' => true,
        'can_restrict_members' => true,
        'can_promote_members' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_post_messages' => true,
        'can_edit_messages' => true,
        'can_pin_messages' => true,
    ];

    /**
     * True, if the user's presence in the chat is hidden
     *
     * @var bool
     */
    protected $isAnonymous;

    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @var bool
     */
    protected $canManageChat;

    /**
     * True, if the administrator can delete messages of other users
     *
     * @var bool
     */
    protected $canDeleteMessages;

    /**
     * True, if the administrator can manage video chats
     *
     * @var bool
     */
    protected $canManageVideoChats;

    /**
     * True, if the administrator can restrict, ban or unban chat members
     *
     * @var bool
     */
    protected $canRestrictMembers;

    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @var
     */
    protected $canPromoteMembers;

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
     * Optional. True, if the administrator can post in the channel; channels only
     *
     * @var bool
     */
    protected $canPostMessages;

    /**
     * Optional. True, if the administrator can edit messages of other users and can pin messages; channels only
     *
     * @var bool
     */
    protected $canEditMessages;

    /**
     * Optional. True, if the user is allowed to pin messages; groups and supergroups only
     *
     * @var bool
     */
    protected $canPinMessages;

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
     * @return bool
     */
    public function canManageChat()
    {
        return $this->canManageChat;
    }

    /**
     * @param bool $canManageChat
     */
    public function setCanManageChat($canManageChat)
    {
        $this->canManageChat = $canManageChat;
    }

    /**
     * @return bool
     */
    public function canDeleteMessages()
    {
        return $this->canDeleteMessages;
    }

    /**
     * @param bool $canDeleteMessages
     */
    public function setCanDeleteMessages($canDeleteMessages)
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    /**
     * @return bool
     */
    public function canManageVideoChats()
    {
        return $this->canManageVideoChats;
    }

    /**
     * @param bool $canManageVideoChats
     */
    public function setCanManageVideoChats($canManageVideoChats)
    {
        $this->canManageVideoChats = $canManageVideoChats;
    }

    /**
     * @return bool
     */
    public function canRestrictMembers()
    {
        return $this->canRestrictMembers;
    }

    /**
     * @param bool $canRestrictMembers
     */
    public function setCanRestrictMembers($canRestrictMembers)
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    /**
     * @return bool
     */
    public function canPromoteMembers()
    {
        return $this->canPromoteMembers;
    }

    /**
     * @param bool $canPromoteMembers
     */
    public function setCanPromoteMembers($canPromoteMembers)
    {
        $this->canPromoteMembers = $canPromoteMembers;
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
    public function canPostMessages()
    {
        return $this->canPostMessages;
    }

    /**
     * @param bool $canPostMessages
     */
    public function setCanPostMessages($canPostMessages)
    {
        $this->canPostMessages = $canPostMessages;
    }

    /**
     * @return bool
     */
    public function canEditMessages()
    {
        return $this->canEditMessages;
    }

    /**
     * @param bool $canEditMessages
     */
    public function setCanEditMessages($canEditMessages)
    {
        $this->canEditMessages = $canEditMessages;
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
}
