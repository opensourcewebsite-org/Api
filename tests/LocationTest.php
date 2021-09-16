<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\Location;

class LocationTest extends TestCase
{
    public function testSetLatitude()
    {
        $location = new Location();
        $location->setLatitude(55.585827);
        $this->assertEquals(55.585827, $location->getLatitude());
    }

    public function testGetLatitude()
    {
        $location = new Location();
        $location->setLatitude(55.585827);
        $this->assertEquals(55.585827, $location->getLatitude());
    }

    public function testSetLongtitude()
    {
        $location = new Location();
        $location->setLongitude(37.675309);
        $this->assertEquals(37.675309, $location->getLongitude());
    }

    public function testGetLongtitude()
    {
        $location = new Location();
        $location->setLongitude(37.675309);
        $this->assertEquals(37.675309, $location->getLongitude());
    }

    public function testSetHorizontalAccuracy()
    {
        $location = new Location();
        $location->setHorizontalAccuracy(20.5);
        $this->assertEquals(20.5, $location->getHorizontalAccuracy());
    }

    public function testGetHorizontalAccuracy()
    {
        $location = new Location();
        $location->setHorizontalAccuracy(20.5);
        $this->assertEquals(20.5, $location->getHorizontalAccuracy());
    }

    public function testSetLivePeriod()
    {
        $location = new Location();
        $location->setLivePeriod(300);
        $this->assertEquals(300, $location->getLivePeriod());
    }

    public function testGetLivePeriod()
    {
        $location = new Location();
        $location->setLivePeriod(300);
        $this->assertEquals(300, $location->getLivePeriod());
    }

    public function testSetHeading()
    {
        $location = new Location();
        $location->setHeading(100);
        $this->assertEquals(100, $location->getHeading());
    }

    public function testGetHeading()
    {
        $location = new Location();
        $location->setHeading(100);
        $this->assertEquals(100, $location->getHeading());
    }

    public function testSetProximityAlertRadius()
    {
        $location = new Location();
        $location->setProximityAlertRadius(15);
        $this->assertEquals(15, $location->getProximityAlertRadius());
    }

    public function testGetProximityAlertRadius()
    {
        $location = new Location();
        $location->setProximityAlertRadius(100);
        $this->assertEquals(100, $location->getProximityAlertRadius());
    }

    public function testFromResponse()
    {
        $location = Location::fromResponse(
            array(
                "latitude" => 55.585827,
                'longitude' => 37.675309,
                'horizontal_accuracy' => 20.5,
                'live_period' => 300,
                'heading' => 100,
                'proximity_alert_radius' => 15
            )
        );
        $this->assertInstanceOf('\TelegramBot\Api\Types\Location', $location);
        $this->assertEquals(55.585827, $location->getLatitude());
        $this->assertEquals(37.675309, $location->getLongitude());
        $this->assertEquals(20.5, $location->getHorizontalAccuracy());
        $this->assertEquals(300, $location->getLivePeriod());
        $this->assertEquals(100, $location->getHeading());
        $this->assertEquals(15, $location->getProximityAlertRadius());
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetHorizontalAccuracyException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Location();
        $item->setHorizontalAccuracy('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetLatitudeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Location();
        $item->setLatitude('s');
    }

    /**
     * @expectedException \TelegramBot\Api\InvalidArgumentException
     */
    public function testSetLongitudeException()
    {
        $this->expectException(\TelegramBot\Api\InvalidArgumentException::class);

        $item = new Location();
        $item->setLongitude('s');
    }
}
