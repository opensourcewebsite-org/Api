<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class KeyboardButton extends BaseType
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
        'request_contact' => true,
        'request_location' => true,
        'request_poll' => KeyboardButtonPollType::class,
        'web_app' => WebAppInfo::class,
    ];

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     *
     * @var string
     */
    protected $text;

    /**
     *  	Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     *
     * @var bool
     */
    protected $requestContact;

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
     *
     * @var bool
     */
    protected $requestLocation;

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     *
     * @var KeyboardButtonPollType
     */
    protected $requestPoll;

    /**
     * Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     *
     * @var WebAppInfo
     */
    protected $webApp;

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
     * @return bool
     */
    public function requestContact()
    {
        return $this->requestContact;
    }

    /**
     * @param bool $requestContact
     */
    public function setRequestContact($requestContact)
    {
        $this->requestContact = $requestContact;
    }

    /**
     * @return bool
     */
    public function requestLocation()
    {
        return $this->requestLocation;
    }

    /**
     * @param bool $requestLocation
     */
    public function setRequestLocation($requestLocation)
    {
        $this->requestLocation = $requestLocation;
    }

    /**
     * @return KeyboardButtonPollType
     */
    public function getRequestPoll()
    {
        return $this->requestPoll;
    }

    /**
     * @param KeyboardButtonPollType $requestPoll
     */
    public function setRequestPoll($requestPoll)
    {
        $this->requestPoll = $requestPoll;
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
}
