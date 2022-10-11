<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\Types\User;

/**
 * Represents an invite link for a chat.
 *
 * @package TelegramBot\Api\Types
 */
class ChatInviteLink extends BaseType
{
    /**
    * {@inheritdoc}
    *
    * @var array
    */
    protected static $requiredParams = [
        'invite_link',
        'creator'
    ];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'invite_link' => true,
        'creator' => User::class,
        'creates_join_request' => true,
        'is_primary' => true,
        'is_revoked' => true,
        'name' => true,
        'expire_date' => true,
        'member_limit' => true,
        'pending_join_request_count' => true
    ];

    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     * String
     *
     * @var string
     */
    protected $inviteLink;

    /**
     * Creator of the link
     *
     * @var User
     */
    protected $creator;

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators
     * Boolean
     *
     * @var bool
     */
    protected $createsJoinRequest;

    /**
     * True, if the link is primary
     * Boolean
     *
     * @var bool
     */
    protected $isPrimary;

    /**
     * True, if the link is revoked
     * Boolean
     *
     * @var bool
     */
    protected $isRevoked;

    /**
     * Optional. Invite link name
     * String
     *
     * @var string
     */
    protected $name;

    /**
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     * Integer
     *
     * @var integer
     */
    protected $expireDate;

    /**
     * Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * Integer
     *
     * @var integer
     */
    protected $memberLimit;

    /**
     * Optional. Number of pending join requests created using this link
     * Integer
     *
     * @var integer
     */
    protected $pendingJoinRequestCount;

    /**
     * @return string
     */
    public function getInviteLink()
    {
        return $this->inviteLink;
    }

    /**
     * @param string $inviteLink
     */
    public function setInviteLink($inviteLink)
    {
        $this->inviteLink = $inviteLink;
    }

    /**
     * @return User
     */
    public function getCreator()
    {
        return $this->creator;
    }
    /**
     * @param User $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * @return bool
     */
    public function getCreatesJoinRequest()
    {
        return $this->createsJoinRequest;
    }
    /**
     * @param bool $createsJoinRequest
     */
    public function setCreatesJoinRequest($createsJoinRequest)
    {
        $this->createsJoinRequest = $createsJoinRequest;
    }

    /**
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * @param bool $isPrimary
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
    }

    /**
     * @return bool
     */
    public function getIsRevoked()
    {
        return $this->isRevoked;
    }

    /**
     * @param bool $isRevoked
     */
    public function setIsRevoked($isRevoked)
    {
        $this->isRevoked = $isRevoked;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param integer $expireDate
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return integer
     */
    public function getMemberLimit()
    {
        return $this->memberLimit;
    }

    /**
     * @param integer $memberLimit
     */
    public function setMemberLimit($memberLimit)
    {
        $this->memberLimit = $memberLimit;
    }

    /**
     * @return integer
     */
    public function getPendingJoinRequestCount()
    {
        return $this->pendingJoinRequestCount;
    }

    /**
     * @param integer $pendingJoinRequestCount
     */
    public function setPendingJoinRequestCount($pendingJoinRequestCount)
    {
        $this->pendingJoinRequestCount = $pendingJoinRequestCount;
    }
}
