<?php

namespace GeodistanceTest;

use geodistance\location;

class GeodistanceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
	public function testLocationShouldThrowExceptionOnInvalidCoordinates()
    {
        new location(1, 2);
    }

    /**
     * @test
     */
    public function testLocationLatitudeShouldReturnRadians()
    {
        $new_york = new location(180.0, 0.0);

        $this->assertSame(pi(), $new_york->latitude());
    }

    /**
     * @test
     */
    public function testLocationLongitudeShouldReturnRadians()
    {
        $new_york = new location(0.0, 180.0);

        $this->assertSame(pi(), $new_york->longitude());
    }

    /**
     * @test
     */
    public function testSameLocationShouldReturnZeroDistance()
    {
        $new_york = new location(10.2, 12.1);

        $this->assertSame(0.0, \geodistance\meters($new_york, $new_york));
    }
}