<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;

class BaseTypeTest extends TestCase
{
    public function setUp(): void
    {
        include_once('tests/_fixtures/TestBaseType.php');
    }

    public function testRequiredParams()
    {
        $testItem = new \TestBaseType();
        $this->assertEquals(array('test1', 'test2'), $testItem::$requiredParams);
    }

    public function testValidate()
    {
        $this->assertTrue(\TestBaseType::validate(array('test1' => 1, 'test2' => 2, 'test3' => 3)));
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testValidateException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $this->assertTrue(\TestBaseType::validate(array('test1' => 1)));
    }
}
