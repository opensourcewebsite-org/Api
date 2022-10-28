<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ArrayOfSticker;
use TelegramBot\Api\Types\Sticker;

class ArrayOfStickerTest extends TestCase
{
    public function testFromResponse()
    {
        $array = array(
            array(
                'file_id' => 'id',
                'file_unique_id' => 'unique_id',
                'type' => 'regular',
                'width' => 255,
                'height' => 512,
                'is_animated' => false,
                'is_video' => false,
            ),
        );
        $item = ArrayOfSticker::fromResponse($array);
        $this->assertEquals($item[0], Sticker::fromResponse($array[0]));
    }
}
