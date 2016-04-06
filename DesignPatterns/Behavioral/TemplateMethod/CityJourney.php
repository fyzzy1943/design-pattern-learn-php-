<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Class CityJourney 在城市中度假~
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo 'Eat, drink, take photos and sleep', PHP_EOL;
    }
}