<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;

class ArrayOfSticker extends BaseType
{
    public static function fromResponse($data)
    {
        $arrayOfSticker = [];
        foreach ($data as $sticker) {
            $arrayOfSticker[] = Sticker::fromResponse($sticker);
        }

        return $arrayOfSticker;
    }
}
