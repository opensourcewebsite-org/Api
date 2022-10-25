<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\KeyboardButton;
use TelegramBot\Api\Types\KeyboardButtonPollType;
use TelegramBot\Api\Types\WebAppInfo;

class KeyboardButtonTest extends TestCase
{
    public function testGetText()
    {
        $item = new KeyboardButton();
        $item->setText('button text');
        $this->assertEquals('button text', $item->getText());
    }

    public function testSetText()
    {
        $item = new KeyboardButton();
        $item->setText('button text');
        $this->assertEquals('button text', $item->getText());
    }

    public function testRequestContact()
    {
        $item = new KeyboardButton();
        $item->setRequestContact(true);
        $this->assertEquals(true, $item->requestContact());
    }

    public function testSetRequestContact()
    {
        $item = new KeyboardButton();
        $item->setRequestContact(false);
        $this->assertEquals(false, $item->requestContact());
    }

    public function testRequestLocation()
    {
        $item = new KeyboardButton();
        $item->setRequestLocation(false);
        $this->assertEquals(false, $item->requestLocation());
    }
    public function testSetRequestLocation()
    {
        $item = new KeyboardButton();
        $item->setRequestLocation(true);
        $this->assertEquals(true, $item->requestLocation());
    }

    public function testGetRequestPoll()
    {
        $item = new KeyboardButton();
        $item->setRequestPoll(KeyboardButtonPollType::fromResponse([
            'type' => 'quiz',
        ]));
        $this->assertEquals(
            KeyboardButtonPollType::fromResponse([
                'type' => 'quiz',
            ]),
            $item->getRequestPoll(),
        );
    }

    public function testSetRequestPoll()
    {
        $item = new KeyboardButton();
        $requestPoll = new KeyboardButtonPollType();
        $requestPoll->setType('regular');
        $item->setRequestPoll($requestPoll);
        $this->assertEquals($requestPoll, $item->getRequestPoll());
    }

    public function testGetWebApp()
    {
        $item = new KeyboardButton();
        $webApp = new WebAppInfo();
        $webApp->setUrl('url.com');
        $item->setWebApp($webApp);
        $this->assertEquals($webApp, $item->getWebApp());
    }
}
