<?php
/**
 * Date: 2016/4/6
 */

namespace Test;

use DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use DesignPatterns\Behavioral\TemplateMethod\CityJourney;

class JourneyTest
{
    public function testBeach()
    {
        $journey = new BeachJourney();
        $journey->takeATrip();
    }

    public function testCity()
    {
        $journey = new CityJourney();
        $journey->takeATrip();
    }

    public function test()
    {
        echo '<div>Iterator Test</div>';

        $this->testBeach();
        $this->testCity();
    }
}