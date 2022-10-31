<?php

namespace TelegramBot\Api\Test\Types\Inline;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Inline\ChosenInlineResult;
use TelegramBot\Api\Types\User;

class ChosenInlineResultTest extends TestCase
{
    protected $chosenInlineResultFixture = [
        'result_id' => 1,
        'from' => [
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
            'is_bot' => false,
        ],
        'query' => 'test_query'
    ];

    public function testFromResponse()
    {
        $item = ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);

        $user = User::fromResponse($this->chosenInlineResultFixture['from']);

        $this->assertInstanceOf('\TelegramBot\Api\Types\Inline\ChosenInlineResult', $item);
        $this->assertEquals($this->chosenInlineResultFixture['result_id'], $item->getResultId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertEquals($this->chosenInlineResultFixture['query'], $item->getQuery());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        unset($this->chosenInlineResultFixture['result_id']);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException2()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        unset($this->chosenInlineResultFixture['from']);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testFromResponseException3()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        unset($this->chosenInlineResultFixture['query']);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    public function testSetResultId()
    {
        $item = new ChosenInlineResult();
        $item->setResultId($this->chosenInlineResultFixture['result_id']);
        $this->assertEquals($this->chosenInlineResultFixture['result_id'], $item->getResultId());
    }

    public function testGetResultId()
    {
        $item = new ChosenInlineResult();
        $item->setResultId($this->chosenInlineResultFixture['result_id']);
        $this->assertEquals($this->chosenInlineResultFixture['result_id'], $item->getResultId());
    }

    public function testSetFrom()
    {
        $item = new ChosenInlineResult();
        $user = User::fromResponse($this->chosenInlineResultFixture['from']);
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testGetFrom()
    {
        $item = new ChosenInlineResult();
        $user = User::fromResponse($this->chosenInlineResultFixture['from']);
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testSetQuery()
    {
        $item = new ChosenInlineResult();
        $item->setQuery('testQuery');
        $this->assertEquals('testQuery', $item->getQuery());
    }

    public function testGetQuery()
    {
        $item = new ChosenInlineResult();
        $item->setQuery('testQuery');
        $this->assertEquals('testQuery', $item->getQuery());
    }
}
