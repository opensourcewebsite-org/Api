<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\UserShared;

class UserSharedTest extends TestCase
{
    public function testRequestId()
    {
        $item = new UserShared();
        $item->setRequestId(1);
        $this->assertEquals(1, $item->getRequestId());
    }

    public function testUserId()
    {
        $item = new UserShared();
        $item->setUserId(1);
        $this->assertEquals(1, $item->getUserId());
    }
}
