<?php

namespace TelegramBot\Api\Test\Types\Inline;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Inline\InlineKeyboardButton;

class InlineKeyboardButtonTest extends TestCase
{
    public function testSetText()
    {
        $item = new InlineKeyboardButton();
        $item->setText("inline_button");
        $this->assertEquals("inline_button", $item->getText());
    }

    public function testGetText()
    {
        $item = new InlineKeyboardButton();
        $item->setText("inline_button");
        $this->assertEquals("inline_button", $item->getText());
    }

    public function testSetUrl()
    {
        $item = new InlineKeyboardButton();
        $item->setUrl("https://url.com");
        $this->assertEquals("https://url.com", $item->getUrl());
    }

    public function testGetUrl()
    {
        $item = new InlineKeyboardButton();
        $item->setUrl("https://url.com");
        $this->assertEquals("https://url.com", $item->getUrl());
    }

    public function testSetCallbackData()
    {
        $item = new InlineKeyboardButton();
        $item->setCallbackData("data");
        $this->assertEquals("data", $item->getCallbackData());
    }

    public function testGetCallbackData()
    {
        $item = new InlineKeyboardButton();
        $item->setCallbackData("data");
        $this->assertEquals("data", $item->getCallbackData());
    }

    public function testSetLoginUrl()
    {
        $item = new InlineKeyboardButton();
        $item->setLoginUrl("https://login.url.com");
        $this->assertEquals("https://login.url.com", $item->getLoginUrl());
    }

    public function testGetLoginUrl()
    {
        $item = new InlineKeyboardButton();
        $item->setLoginUrl("https://login.url.com");
        $this->assertEquals("https://login.url.com", $item->getLoginUrl());
    }

    public function testSetSwitchInlineQuery()
    {
        $item = new InlineKeyboardButton();
        $item->setSwitchInlineQuery("inline_query");
        $this->assertEquals("inline_query", $item->getSwitchInlineQuery());
    }

    public function testGetSwitchInlineQuery()
    {
        $item = new InlineKeyboardButton();
        $item->setSwitchInlineQuery("inline_query");
        $this->assertEquals("inline_query", $item->getSwitchInlineQuery());
    }

    public function testSetSwitchInlineQueryCurrentChat()
    {
        $item = new InlineKeyboardButton();
        $item->setSwitchInlineQueryCurrentChat("query");
        $this->assertEquals("query", $item->getSwitchInlineQueryCurrentChat());
    }

    public function testGetSwitchInlineQueryCurrentChat()
    {
        $item = new InlineKeyboardButton();
        $item->setSwitchInlineQueryCurrentChat("query");
        $this->assertEquals("query", $item->getSwitchInlineQueryCurrentChat());
    }

    public function testSetPay()
    {
        $item = new InlineKeyboardButton();
        $item->setPay(true);
        $this->assertEquals(true, $item->getPay());
    }

    public function testGetPay()
    {
        $item = new InlineKeyboardButton();
        $item->setPay(false);
        $this->assertEquals(false, $item->getPay());
    }
}
