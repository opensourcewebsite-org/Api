<?php

use TelegramBot\Api\BaseType;

class TestBaseType extends BaseType
{
    public static $requiredParams = [
        'test1',
        'test2',
    ];
}
