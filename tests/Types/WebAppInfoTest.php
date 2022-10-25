<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\WebAppInfo;

class WebAppInfoTest extends TestCase
{
    public function testGetUrl()
    {
        $item = new WebAppInfo();
        $item->setUrl('https://url.com');
        $this->assertEquals('https://url.com', $item->getUrl());
    }

    public function testSetUrl()
    {
        $item = new WebAppInfo();
        $item->setUrl('https://url.com');
        $this->assertEquals('https://url.com', $item->getUrl());
    }
}
