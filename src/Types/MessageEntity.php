<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 13/04/16
 * Time: 04:10
 */

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

class MessageEntity extends BaseType implements TypeInterface
{
    public const TYPE_MENTION = 'mention';
    public const TYPE_HASHTAG = 'hashtag';
    public const TYPE_CASHTAG = 'cashtag';
    public const TYPE_BOT_COMMAND = 'bot_command';
    public const TYPE_URL = 'url';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PHONE_NUMBER = 'phone_number';
    public const TYPE_BOLD = 'bold';
    public const TYPE_ITALIC = 'italic';
    public const TYPE_UNDERLINE = 'underline';
    public const TYPE_STRIKETHROUGH = 'strikethrough';
    public const TYPE_SPOILER = 'spoiler';
    public const TYPE_CODE = 'code';
    public const TYPE_PRE = 'pre';
    public const TYPE_TEXT_LINK = 'text_link';
    public const TYPE_TEXT_MENTION = 'text_mention';
    public const TYPE_CUSTOM_EMOJI = 'custom_emoji';

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['type', 'offset', 'length'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'type' => true,
        'offset' => true,
        'length' => true,
        'url' => true,
        'user' => User::class,
        'language' => true,
        'custom_emoji_id' => true,
    ];

    /**
     * Type of the entity.
     * One of mention (@username), hashtag (#hashtag), cashtag ($USD), bot_command, url, email, phone_number,
     * bold (bold text), italic (italic text), underline (underlined text), strikethrough (strikethrough text),
     * code (monowidth string), pre (monowidth block), text_link (for clickable text URLs),
     * text_mention (for users without usernames)
     *
     * @var string
     */
    protected $type;

    /**
     * Offset in UTF-16 code units to the start of the entity
     *
     * @var int
     */
    protected $offset;

    /**
     * Length of the entity in UTF-16 code units
     *
     * @var int
     */
    protected $length;

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     *
     * @var string
     */
    protected $url;

    /**
     * Optional. For “text_mention” only, the mentioned user
     *
     * @var User
     */
    protected $user;

    /**
     * Optional. For “pre” only, the programming language of the entity text
     *
     * @var string
     */
    protected $language;

    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
     *
     * @var string
     */
    protected $customEmojiId;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCustomEmojiId()
    {
        return $this->customEmojiId;
    }

    /**
     * @param string $customEmojiId
     */
    public function setCustomEmojiId($customEmojiId)
    {
        $this->customEmojiId = $customEmojiId;
    }
}
