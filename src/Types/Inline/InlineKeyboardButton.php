<?php

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\Types\LoginUrl;
use TelegramBot\Api\Types\WebAppInfo;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @package TelegramBot\Api\Types
 */
class InlineKeyboardButton extends BaseType
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $requiredParams = ['text'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    protected static $map = [
        'text' => true,
        'url' => true,
        'callback_data' => true,
        'web_app' => WebAppInfo::class,
        'login_url' => LoginUrl::class,
        'switch_inline_query' => true,
        'switch_inline_query_current_chat' => true,
        'pay' => true,
    ];

    /**
     * Label text on the button
     *
     * @var string
     */
    protected $text;

    /**
     * Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     *
     * @var string
     */
    protected $url;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @var string
     */
    protected $callbackData;

    /**
     * Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot.
     *
     * @var WebAppInfo
     */
    protected $webApp;

    /**
     * Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     *
     * @var LoginUrl
     */
    protected $loginUrl;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.
     * Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions - in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     *
     * @var string
     */
    protected $switchInlineQuery;

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.
     * This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
     *
     * @var string
     */
    protected $switchInlineQueryCurrentChat;

    /**
     * Optional. Specify True, to send a Pay button.
     * NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     *
     * @var boolean
     */
    protected $pay;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
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
     * @return string
     */
    public function getCallbackData()
    {
        return $this->callbackData;
    }

    /**
     * @param string $callbackData
     */
    public function setCallbackData($callbackData)
    {
        $this->callbackData = $callbackData;
    }

    /**
     * @return WebAppInfo
     */
    public function getWebApp()
    {
        return $this->webApp;
    }

    /**
     * @param WebAppInfo $webApp
     */
    public function setWebApp($webApp)
    {
        $this->webApp = $webApp;
    }

    /**
     * @return LoginUrl
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * @param LoginUrl $loginUrl
     */
    public function setLoginUrl($loginUrl)
    {
        $this->loginUrl = $loginUrl;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQuery()
    {
        return $this->switchInlineQuery;
    }

    /**
     * @param string $switchInlineQuery
     */
    public function setSwitchInlineQuery($switchInlineQuery)
    {
        $this->switchInlineQuery = $switchInlineQuery;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQueryCurrentChat()
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @param string $switchInlineQueryCurretChat
     */
    public function setSwitchInlineQueryCurrentChat($switchInlineQueryCurrentChat)
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
    }

    /**
     * @return boolean
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * @var boolean $pay
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
    }
}
