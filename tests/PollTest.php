<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Poll;
use TelegramBot\Api\Types\PollOption;

class PollTest extends TestCase
{
    public function testGetId()
    {
        $item = new Poll();
        $item->setId(123456789);
        $this->assertEquals(123456789, $item->getId());
    }

    public function testSetId()
    {
        $item = new Poll();
        $item->setId(123456789);
        $this->assertEquals(123456789, $item->getId());
    }

    public function testGetQuestion()
    {
        $item = new Poll();
        $item->setQuestion('What is the name of Heisenberg from "Breaking bad"?');
        $this->assertEquals('What is the name of Heisenberg from "Breaking bad"?', $item->getQuestion());
    }

    public function testSetQuestion()
    {
        $item = new Poll();
        $item->setQuestion('What is the name of Heisenberg from "Breaking bad"?');
        $this->assertEquals('What is the name of Heisenberg from "Breaking bad"?', $item->getQuestion());
    }

    public function testGetOptions()
    {
        $item = new Poll();
        $options = [
            PollOption::fromResponse([
                'text' => 'Walter White',
                'voter_count' => 100
            ]),
        ];
        $item->setOptions($options);
        $this->assertEquals($options, $item->getOptions());
        foreach ($item->getOptions() as $option) {
            $this->assertInstanceOf(PollOption::class, $option);
        }
    }

    public function testSetOptions()
    {
        $item = new Poll();
        $options = [
            PollOption::fromResponse([
                'text' => 'Walter White',
                'voter_count' => 100
            ]),
        ];
        $item->setOptions($options);
        $this->assertEquals($options, $item->getOptions());
    }

    public function testGetTotalVoterCount()
    {
        $item = new Poll();
        $item->setTotalVoterCount(17);
        $this->assertEquals(17, $item->getTotalVoterCount());
    }

    public function testSetTotalVoterCount()
    {
        $item = new Poll();
        $item->setTotalVoterCount(17);

        $this->assertEquals(17, $item->getTotalVoterCount());
    }

    public function testIsClosed()
    {
        $item = new Poll();
        $item->setIsClosed(true);
        $this->assertTrue($item->isClosed());
    }

    public function testSetIsClosed()
    {
        $item = new Poll();
        $item->setIsClosed(true);
        $this->assertTrue($item->isClosed());
    }

    public function testIsAnonymous()
    {
        $item = new Poll();
        $item->setIsAnonymous(false);
        $this->assertFalse($item->isAnonymous());
    }

    public function testSetIsAnonymous()
    {
        $item = new Poll();
        $item->setIsAnonymous(false);
        $this->assertFalse($item->isAnonymous());
    }

    public function testGetType()
    {
        $item = new Poll();
        $item->setType('regular');
        $this->assertEquals('regular', $item->getType());
    }

    public function testSetType()
    {
        $item = new Poll();
        $item->setType('regular');
        $this->assertEquals('regular', $item->getType());
    }

    public function testAllowsMultipleAnswers()
    {
        $item = new Poll();
        $item->setAllowsMultipleAnswers(true);
        $this->assertTrue($item->isAllowsMultipleAnswers());
    }

    public function testSetAllowsMultipleAnswers()
    {
        $item = new Poll();
        $item->setAllowsMultipleAnswers(true);
        $this->assertTrue($item->isAllowsMultipleAnswers());
    }

    public function testGetCorrectOptionId()
    {
        $item = new Poll();
        $item->setCorrectOptionId(2);
        $this->assertEquals(2, $item->getCorrectOptionId());
    }

    public function testSetCorrectOptionId()
    {
        $item = new Poll();
        $item->setCorrectOptionId(2);

        $this->assertEquals(2, $item->getCorrectOptionId());
    }
}
