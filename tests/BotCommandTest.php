<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\BotCommand;

class BotCommandTest extends TestCase
{
    public function testSetCommand()
    {
        $item = new BotCommand();
        $item->setCommand('start');
        $this->assertEquals('start', $item->getCommand());
    }

    public function testGetCommand()
    {
        $item = new BotCommand();
        $item->setCommand('start');
        $this->assertEquals('start', $item->getCommand());
    }

    public function testSetDescription()
    {
        $item = new BotCommand();
        $item->setDescription('This is a start command!');
        $this->assertEquals('This is a start command!', $item->getDescription());
    }

    public function testGetDescription()
    {
        $item = new BotCommand();
        $item->setDescription('This is a start command!');
        $this->assertEquals('This is a start command!', $item->getDescription());
    }

    public function testFromResponse()
    {
        $item = BotCommand::fromResponse(
            [
                'command' => 'start',
                'description' => 'This is a start command!',
            ]
        );

        $this->assertInstanceOf('\TelegramBot\Api\Types\BotCommand', $item);
        $this->assertEquals('start', $item->getCommand());
        $this->assertEquals('This is a start command!', $item->getDescription());
    }
}
